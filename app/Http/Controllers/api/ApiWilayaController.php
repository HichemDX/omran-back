<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilaya;
use App\Http\Resources\Wilaya as ResourcesWilaya;


class ApiWilayaController extends Controller
{
    // API

    public function api_wilaya() {
        $response = Wilaya::all();
        return response(ResourcesWilaya::collection($response), 200);
    }

}
