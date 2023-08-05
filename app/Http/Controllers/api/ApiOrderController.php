<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Google\Cloud\Storage\Notification;
use Illuminate\Http\Request;
use App\Http\Resources\Order as ResourcesOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\saving;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Exception\MessagingException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;

class ApiOrderController extends Controller
{

  // API
  public function api_commands(Request $request)
  {
    $response = Order::where(
      "customer_id",
      "=",
      $request->user("sanctum")->id
    )
      ->with("commune", "store", "products", "customer")
      ->orderBy("created_at", "desc")
      ->paginate(10);
    return response(
      ["commands" => ResourcesOrder::collection($response)],
      200
    );
  }

  public function api_info_command(Request $request)
  {
    $fields = $request->validate([
      "commande_id" => "required|integer",
    ]);
    $response = Order::with(
      "commune",
      "store",
      "products",
      "customer"
    )->findOrFail($fields["commande_id"]);
    return response(new ResourcesOrder($response), 200);
  }

  public function api_confirmation_commande(Request $request)
  {
    $fields = $request->validate([
      "nom" => "required|string",
      "phone" => "required|string",
      "wilaya_id" => "required|integer",
      "commune_id" => "required|integer",
      "route" => "required|string",
      "commandes" => "required|array",
      //'commandes.store_id' => 'required|integer',
      "commandes.*.shipping_cost" => "required|integer",
      "commandes.*.products" => "required|array",
      "commandes.*.products.*.id" => "required|integer",
      "commandes.*.products.*.quantity" => "required",
    ]);

    $orders = [];
    $user_id = null;

    foreach ($fields["commandes"] as $commande) {
      $code = Order::orderBy("id", "desc")->first();
      if ($code == null) {
        $code = "ORD_" . sprintf("%05d", 1);
      } else {
        $code = "ORD_" . sprintf("%05d", $code->id + 1);
      }
      $total = $commande["shipping_cost"];
      $prodstoadd = [];
      foreach ($commande["products"] as $prod) {
        $p = Product::findOrFail($prod["id"]);
        $prodstoadd[$prod["id"]] = [
          "price" => $p->price,
          "qty" => $prod["quantity"],
          "subtotal" => $prod["quantity"] * $p->price,
          "created_at" => Carbon::now(),
          "updated_at" => Carbon::now(),
        ];
        $total = $total + $prod["quantity"] * $p->price;
      }

      if ($request->user("sanctum")) {
        $user = $request->user("sanctum");
        $order = $user->orders()->create([
          "name" => $fields["nom"],
          "phone" => $fields["phone"],
          "address" => $fields["route"],
          "commune_id" => $fields["commune_id"],
          "code" => $code, //uniqid().Carbon::now()->timestamp,
          "store_id" => $commande["store_id"],
          "grand_total" => $total,
          "shipping_cost" => $commande["shipping_cost"],
        ]);
        $user_id = $user->id;
      } else {
        $order = Order::create([
          "name" => $fields["nom"],
          "phone" => $fields["phone"],
          "address" => $fields["route"],
          "commune_id" => $fields["commune_id"],
          "code" => $code, //uniqid().Carbon::now()->timestamp,
          "store_id" => $commande["store_id"],
          "grand_total" => $total,
          "shipping_cost" => $commande["shipping_cost"],
        ]);
      }

      $order->products()->attach($prodstoadd);
      array_push($orders, $order->id);

      $this->sendOrderNotification($commande["store_id"], $user_id, $order->id);
    }

    return response(
      ResourcesOrder::collection(
        Order::whereIn("id", $orders)
          ->with("commune", "store", "products", "customer")
          ->get()
      ),
      201
    );
  }

  private function sendOrderNotification($storeId, $customerId, $orderId)
  {
    // Initialize Firebase SDK
    $firebase = (new Factory())
      ->withServiceAccount(__DIR__ . '/path/to/your/firebase_credentials.json')
      ->create();
    $messaging = $firebase->getMessaging();

    // Fetch store details
    $store = Store::find($storeId);

    // Create notification and message
    $notification = Notification::create(
      'New Order!',
      'You have received a new order.'
    );
    $message = CloudMessage::withTarget('token', $store->fcm_token)
      ->withNotification($notification)
      ->withData([
        'store_id' => $storeId,
        'customer_id' => $customerId,
        'order_id' => $orderId,
      ]);

    // Send the message
    try {
      $messaging->send($message);
      // Notification sent successfully
    } catch (MessagingException $e) {
      // Error sending notification
      Log::error('Error sending notification: ' . $e->getMessage());
    }
  }


  public function api_cancel_order(Request $request)
  {
    $order = $request->user('sanctum')->orders()->where('id', '=', $request->input('order_id'))->firstOrFail();
    $customer = $order->customer()->first();
    $store = $order->store()->first();
    try {
      $order->status = 'CANCELED';
      $order->save();
      notificationCustomerCancelOrder($store->fcm_token, $store->id, $customer != null ? $customer->id : null, $customer != null ? $customer->fcm_token : null, $order->id);
      return response(['result' => true, 'error' => null], 201);
    } catch (ModelNotFoundException $e) {
      return response(['result' => false, 'error' => $e->getMessage()], 404);
    } catch (HttpExceptionInterface $e) {
      return response(['result' => false, 'error' => $e->getMessage()], $e->getStatusCode());
    }
  }
  
}
