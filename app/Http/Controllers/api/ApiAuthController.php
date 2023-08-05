<?php

namespace App\Http\Controllers\api;

use App\Models\Store;
use App\Mail\SendMail;
use App\Models\Customer;
use App\Mail\SendMailReset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Store as ResourcesStore;
use App\Http\Resources\Customer as ResourcesCustomer;

class ApiAuthController extends Controller
{
  public function logout(Request $request)
  {
    $user = $request->user("sanctum");
    $user
      ->tokens()
      ->where("id", $user->currentAccessToken()->id)
      ->delete();
    return $this->CustumReturn([], true, 200);
  }

  public function register(Request $request)
  {
    $validate = Validator::make($request->all(), [
      "type"     => "required|string",
      "phone"    => [
        "required",
        "string",
        "regex:/^[0-9]{10}$/",
      ],
      "name"     => "required|string",
      "password" => "required|string",
    ]);

    if ($validate->fails()) {
      return $this->CustumReturn($validate->errors(), false, 400);
    }

    $customer = Customer::where("phone", $request->phone)->first();
    $store    = Store::where("phone", $request->phone)->first();

    if ($customer || $store) {
      return $this->CustumError("phone number already exists", false, 400);
    }

    if ($request->type == "S") {
      $user = Store::create([
        "name"     => $request->name,
        "phone"    => $request->phone,
        "password" => Hash::make($request->password),
      ]);
      return $this->CustumReturn(
        [
          "user" => new ResourcesStore($user),
        ],
        true,
        200
      );
    } elseif ($request->type == "C") {
      $user = Customer::create([
        "phone"    => $request->phone,
        "name"     => $request->name,
        "password" => Hash::make($request->password),
      ]);
      return $this->CustumReturn(
        [
          "user" => new ResourcesCustomer($user),
        ],
        true,
        200
      );
    } else {
      return $this->CustumError("error", false, 400);
    }
  }

  public function sendCode(Request $request)
  {
    $user = Auth::user();

    // if ($user->validated == 1) {
    //     return $this->CustumReturn(['error'=>'user already verified'],false,400);
    // }

    $code       = rand(100000, 999999);
    $user->code = $code;
    $user->save();

    // Assuming you have a "phone" field in your user database table
    // You can use a service to send an SMS with the verification code
    // For this example, we'll just return the code as a response.
    return $this->CustumReturn(['code' => $code], true, 200);
  }

  public function confirmcode(Request $request)
  {
    $validate = Validator::make($request->all(), [
      'code' => 'required|string',
    ]);

    if ($validate->fails()) {
      return $this->CustumReturn($validate->errors(), false, 400);
    }
    $user = Auth::user();
    if ($user->code == $request->code) {
      $user->validated = 1;
      $user->code      = null;
      $user->save();
      $model      = get_class($user);
      $user_token = $user->createToken('Omran')->plainTextToken;
      if ($model == 'App\Models\Store') {
        return response([
          "isClient" => false,
          "isBanned" => $user->ban ? true : false,
          "token"    => "Bearer " . $user_token,
          "data"     => new ResourcesStore($user)
        ], 200);
      } else if ('App\Models\Customer') {
        return response([
          "isClient" => true,
          "isBanned" => $user->ban ? true : false,
          "token"    => "Bearer " . $user_token,
          "data"     => new ResourcesCustomer($user)
        ], 200);
      } else {
        return $this->CustumError('not customer not store', false, 400);
      }
    } else {
      return $this->CustumReturn(['error' => 'wrong code'], false, 403);
    }
  }

  public function resetpassword(Request $request)
  {
    $validate = Validator::make($request->all(), [
      'email' => 'required|email',
    ]);

    if ($validate->fails()) {
      return $this->CustumReturn($validate->errors(), false, 400);
    }
    $customer = Customer::where('email', $request->email)->first();
    $store    = Store::where('email', $request->email)->first();
    if (!$customer && !$store) {
      return $this->CustumError('account doesnt exist', false, 404);
    }
    $user = $customer ? $customer : $store;

    $code       = rand(100000, 999999);
    $user->code = $code;
    $user->save();

    Mail::to($user->email)->send(new SendMailReset($code));

    return $this->CustumReturn([], true, 200);
  }

  public function changepassword(Request $request)
  {
    $validate = Validator::make($request->all(), [
      'code'     => 'required|string',
      'email'    => 'required|email',
      'password' => 'required|string|min:4',
    ]);

    if ($validate->fails()) {
      return $this->CustumReturn($validate->errors(), false, 400);
    }
    $customer = Customer::where('email', $request->email)->first();
    $store    = Store::where('email', $request->email)->first();
    if (!$customer && !$store) {
      return $this->CustumReturn([], false, 404);
    }
    $user = $customer ? $customer : $store;
    if ($user->code == $request->code) {
      $user->password = Hash::make($request->password);
      $user->code     = null;
      $user->save();
      return $this->CustumReturn([], true, 200);
    } else {
      return $this->CustumReturn(['error' => 'wrong code'], false, 403);
    }
  }
}
