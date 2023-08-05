<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiStoreHomeController extends Controller
{
    
    function home(Request $request){
        $prod_count = $request->user('sanctum')->products()->count();
        $order_count = $request->user('sanctum')->orders()->count();
        return response(['products' => $prod_count, 'orders' => $order_count], 200);
    }
}
