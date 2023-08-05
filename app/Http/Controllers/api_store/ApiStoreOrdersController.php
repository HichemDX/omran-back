<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Order as ResourcesOrder;
use App\Models\Order;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiStoreOrdersController extends Controller
{

    public function orders(Request $request){
        $user = $request->user('sanctum');
        if($request->status){
            //$response = $request->user('sanctum')->with('commune')->orders()->where('status', 'like', $request->input('status'))->paginate(1);
            $response = Order::where('store_id', '=', $user->id)->where('status', 'like', $request->input('status'))->with('store', 'customer')->paginate(30);
        }
        else $response = Order::where('store_id', '=', $user->id)->with('store', 'customer')->paginate(30);
        return response(ResourcesOrder::collection($response), 200);
    }

    public function change_status(Request $request){
        $order_id = $request->input('order_id');
        $status = $request->input('status');

        $order = $request->user('sanctum')->orders()->where('id', '=', $order_id)->first();
        $customer_token = $order->customer()->first() != null ? $order->customer()->first()->fcm_token : null;
        try{
            $order->status = $status;
            $order->save();
            notificationStatusOrder($request->user('sanctum')->fcm_token, $request->user('sanctum')->id, $order->customer_id, $customer_token, $order_id);

            return response(['result' => true, 'error' => null], 201);
        } catch(ModelNotFoundException $e){
            return response(['result' => false, 'error' => $e->getMessage()], 404);
        }
        catch(HttpExceptionInterface $e){
            return response(['result' => false, 'error' => $e->getMessage()], $e->getStatusCode());
        }
    }

    public function api_one_command(Request $request) {
        $fields = $request->validate([
            'commande_id' => 'required|integer'
        ]);
        $response = Order::with('commune', 'store', 'products', 'customer')->findOrFail($fields['commande_id']);
        return response(new ResourcesOrder($response), 200);
    }



}
