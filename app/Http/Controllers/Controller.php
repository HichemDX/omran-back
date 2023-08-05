<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function CustumError($data, $success, $status)
  {
    return response()->json([
      'message' => $data,
      'success' => $success,
      'status' => $status,
    ], $status);
  }

  public function CustumReturn($data, $success, $status)
  {
    return response()->json([
      'data' => $data,
      'success' => $success,
      'status' => $status,
    ], $status);
  }
}
