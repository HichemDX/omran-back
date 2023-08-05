<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Http\Resources\Store as ResourcesStore;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ApiStoreLoginController extends Controller
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
      "fcm" => "required",
    ]);

    $user = Store::where("phone", $fields["phone"])->first(); // if there is no record with these data, create a new user
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
    return response()->json([
      'data' => [
        "user" => new ResourcesStore($user),
        "token" => "Bearer " . $token,
      ],
      'success' => true,
      'status' => 200
    ], 200);
  }
}
