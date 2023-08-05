<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Commune as ResourcesCommune;
use App\Models\Commune;

class ApiCommuneController extends Controller
{
    // API

    public function api_commune (Request $request) {
        $response = Commune::where('wilaya_id', '=', $request->input("wilaya_id"))->get();
        return response(ResourcesCommune::collection($response), 200);
    }
}
