<?php

use App\Models\CustomerNotification;
use App\Models\StoreNotification;
use Illuminate\Support\Facades\Http;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;

function notification($token, $titre, $body, $image, $route, $id)
{
  $result = sendWithCurl($token, $titre, $body, $id, $route);
  return $result;
}

function sendWithCurl($token, $titre, $body, $id = null, $route = null)
{
  $data = [
    "to" => $token,
    "notification" => [
      "title" => $titre,
      "body" => $body,
      'android_channel_id' => 'dbbnaa'
    ],
    "data" => [
      "id" => $id,
      "route" => $route
    ]
  ];
  $encodedData = json_encode($data);
  $headers = [
    'Authorization: key=AAAAvfoYJg0:APA91bF2Da3Sdo_if25beLoM7K5qOA_wK77VJ10heViuic48N3xYxHfBszMLKezEPZILpQC-8sVwFBC1DrfdGOtdn5fkhyokIb2FJDBPXrL4iS80AGFUyZRV5eubWP2NBSu3a9t-I8kP',
    'Content-Type: application/json',
  ];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
  // Disabling SSL Certificate support temporarily
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
  // Execute post
  $result = curl_exec($ch);
  if ($result === FALSE) {
    die('Curl failed: ' . curl_error($ch));
  }
  // Close connection
  curl_close($ch);
  return $result;
}

function notificationNewOrder($token, $store_id, $customer_id, $order_id = null)
{
  $titre_store = 'Nouvelle commande';
  $body_store = 'Vous avez reçu une nouvelle commande !!';

  $titre_client = 'Nouvelle commande';
  $body_client = 'Vous avez passé une nouvelle commande !!';

  $to_client = sendWithCurl($customer_token, $titre_client, $body_client);
  $to_store = sendWithCurl($token, $titre_store, $body_store);

  $store_notification = StoreNotification::create([
    'customer_id' => $customer_id,
    'store_id' => $store_id,
    'name_fr' => $titre_store,
    'description_fr' => $body_store,
    'type' => 'new order',
    'order_id' => $order_id
  ]);

  return $to_store;
}

function notificationStatusOrder($token, $store_id, $customer_id, $customer_token, $order_id = null)
{
  $titre_store = "Mise à jour de l'état de la commande";
  $body_store = 'Il y a eu de nouvelles mises à jour concernant une commande passée à votre boutique';

  $titre_client = "Mise à jour de l'état de la commande";
  $body_client = 'Il y a eu de nouvelles mises à jour concernant vos commandes';

  $to_client = sendWithCurl($customer_token, $titre_client, $body_client);

  if ($customer_id) {
    $customer_notification = CustomerNotification::create([
      'customer_id' => $customer_id,
      'store_id' => $store_id,
      'name_fr' => $titre_client,
      'description_fr' => $body_client,
      'type' => 'change order status',
      'order_id' => $order_id
    ]);

    sendOrderNotification($token, $titre_store, $body_store);
  }

  return $to_client;
}

function notificationCustomerCancelOrder($token, $store_id, $customer_id, $customer_token, $order_id = null)
{
  $titre_store = "Mise à jour de l'état de la commande";
  $body_store = 'Une commande passée à votre boutique a été annulée !!';

  $titre_client = "Mise à jour de l'état de la commande";
  $body_client = 'Une de vos commandes a été annulée !!';

  $to_client = sendWithCurl($customer_token, $titre_store, $body_store);
  $to_store = sendWithCurl($token, $titre_client, $body_client);

  if ($store_id) {
    $store_notification = StoreNotification::create([
      'customer_id' => $customer_id,
      'store_id' => $store_id,
      'name_fr' => $titre_store,
      'description_fr' => $body_store,
      'type' => 'cancel order',
      'order_id' => $order_id
    ]);

    sendOrderNotification($token, $titre_client, $body_client);
  }

  if ($customer_id) {
    $customer_notification = CustomerNotification::create([
      'customer_id' => $customer_id,
      'store_id' => $store_id,
      'name_fr' => $titre_client,
      'description_fr' => $body_client,
      'type' => 'change status order',
      'order_id' => $order_id
    ]);
  }

  return $titre_client;
}

function sendOrderNotification($token, $titre, $body)
{
  $factory = (new Factory())->withServiceAccount("../../public/firebase.json");
  $messaging = $factory->createMessaging();

  $notification = CloudMessage::new()
    ->withNotification(CloudMessage\Notification::fromArray([
      'title' => $titre,
      'body' => $body,
    ]));

  $message = CloudMessage::fromArray([
    'token' => $token,
    'notification' => [
      'title' => $titre,
      'body' => $body,
    ],
  ]);

  try {
    $messaging->send($message);
    // Notification sent successfully
  } catch (MessagingException $e) {
    // Error sending notification
  }
}
