<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Customer as ResourcesCustomer;
use App\Http\Resources\Store as ResourcesStore;
use App\Models\Customer;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ApiCustomerLoginController extends Controller
{
  public function logout(Request $request)
  {
    $user = $request->user('sanctum');
    $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
    return $this->CustumReturn([], true, 200);
  }

  public function login(Request $request)
  {

    $validator = Validator::make($request->all(), [
      "phone" => "required",
      "password" => "required|string",
      "fcm" => "required|string"
    ]);

    if ($validator->fails()) {
      return $this->CustumError($validator->errors()->first(), false, 400);
    }
    $fields = $request->validate([
      "phone" => "required",
      "password" => "required|string",
      "fcm" => "required|string"
    ]);
    $user = Customer::where("phone", $fields["phone"])->first();



    if ($user == null) {
      return $this->CustumError("User doesn't exist", true, 404);
    } else {
      if (!Hash::check($request->password, $user->password)) {
        return $this->CustumError("Wrong password", true, 404);
      }
      if ($user->ban) {
        return $this->CustumReturn(["ban" => true], false, 200);
      } else {
        $user->fcm_token = $fields["fcm"];
        $user->save();
      }
    }

    $token = $user->createToken("Omran")->plainTextToken;
    return $this->CustumReturn(
      [
        "user" => new ResourcesCustomer($user),
        "token" => "Bearer " . $token,
      ],
      true,
      200
    );
  }

  public function first_login(Request $request)
  {
    $fields = $request->validate([
      "phone" => "required",
      "password" => "required|string",
      "fcm" => "required", // device fcm for firebase
    ]);

    $user = Customer::where("phone", $fields["phone"])->first();
    $store = Store::where("phone", $fields["phone"])->first();

    if ($user) {
      if (Hash::check($request->password, $user->password)) {
        if ($user->ban) {
          return response(
            [
              "isClient" => true,
              "isBanned" => true,
              "token" => null,
              "data" => null,
            ],
            200
          );
        } else {
          $user->fcm_token = $fields["fcm"];
          $user->save();
          $user_token = $user->createToken("Omran")->plainTextToken;
          return response(
            [
              "isClient" => true,
              "isBanned" => false,
              "token" => "Bearer " . $user_token,
              "data" => new ResourcesCustomer($user),
            ],
            200
          );
        }
      } else {
        return response(
          [
            "message" => "Wrong password",
          ],
          401
        );
      }
    } elseif ($store) {
      if (Hash::check($request->password, $store->password)) {
        if ($store->ban) {
          return response(
            [
              "isClient" => false,
              "isBanned" => true,
              "token" => null,
              "data" => null,
            ],
            200
          );
        } else {
          $store->fcm_token = $fields["fcm"];
          $store->save();
          $store_token = $store->createToken("Omran")->plainTextToken;
          return response(
            [
              "isClient" => false,
              "isBanned" => false,
              "token" => "Bearer " . $store_token,
              "data" => new ResourcesStore($store),
            ],
            200
          );
        }
      } else {
        return response(
          [
            "message" => "Wrong password",
          ],
          401
        );
      }
    }

    return response(
      [
        "message" => "Phone number does not exist",
        "success" => false,
        "status" => 404,
      ],
      404
    );
  }
}
