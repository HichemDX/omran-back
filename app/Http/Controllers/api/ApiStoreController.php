<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Store as ResourcesStore;
use App\Models\Commune;
use App\Models\Store;
use App\Models\Wilaya;

class ApiStoreController extends Controller
{
    // API

    public function api_magasins (Request $request) {
        $wilaya = $request->input('wilaya');
        $communes = $request->input('commune');
        $response = Store::where('status', 'ACCEPTED')->where(function ($q) use($wilaya, $communes) {
            if ($communes) {
                $q->whereIn('commune_id', $communes);
            }
            else if ($wilaya){
                $wilayas = Commune::whereIn('wilaya_id', $wilaya)->pluck('id')->toArray();
                $q->whereIn('commune_id', $wilayas)->get();
            }
        })->with('commune')->paginate(50);
        return response(ResourcesStore::collection($response), 200);
    }

    public function show(Request $request, $id)
    {
        $user = Store::findOrFail($id);
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourcesStore($user), 200);

    }



}

