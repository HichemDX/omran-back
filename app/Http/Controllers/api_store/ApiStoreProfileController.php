<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Http\Resources\Store as ResourceStore;
use App\Http\Resources\WilayaCommunesResource;
use App\Models\Commune;
use App\Models\Store;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class ApiStoreProfileController extends Controller
{
    public function api_get_my_info(Request $request) {
        $user = $request->user('sanctum')->load('commune');
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourceStore($user), 200);
    }

    public function api_set_my_info (Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
            //'email' => 'string|nullable',
            'commune' => 'required',
            'address' => 'required|string',
            'longitude' => 'string|nullable',
            'latitude' => 'string|nullable',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            'min_amount_order' => 'required',
        ]);
        $user = $request->user('sanctum');
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $user->id.'_'.uniqid().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images/stores/', $imageName);
        }
        if($imageName){
            $user->update([ 
                'image' => $imageName,
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                //'email' => $fields['email'],
                'commune_id' => $request->input('commune'),
                'address' => $request->input('address'),
                'longitude' => $request->input('longitude'),
                'latitude' => $request->input('latitude'),
                'min_amount_order' => $request->input('min_amount_order')
            ]);
        }
        else{
            $user->update([ 
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                //'email' => $fields['email'],
                'commune_id' => $request->input('commune'),
                'address' => $request->input('address'),
                'longitude' => $request->input('longitude'),
                'latitude' => $request->input('latitude'),
                'min_amount_order' => $request->input('min_amount_order')
            ]);
        }
        
        return response(new ResourceStore($user->load('commune')), 201);
    }

    public function api_delivery(Request $request){
        $fields = $request->validate([
            '*.price' => 'required|integer',
            '*.wilayas' => 'array|present',
            '*.communes.*' => 'integer',
            '*.communes' => 'array|present',
            '*.communes.*' => 'integer'
        ]);
        $user = $request->user('sanctum');
        $user->communes()->detach();
        foreach ($request->all() as $value) {
            if($value["wilayas"] == null || empty($value["wilayas"])){
                $withpivot = [];
                foreach ($value["communes"] as $commune) {
                    $withpivot[$commune] = [ "price" => $value["price"]];
                }
                $user->communes()->attach($withpivot);
            }
            else if($value["communes"] == null || empty($value["communes"])){
                $communes = Commune::whereIn('wilaya_id', $value["wilayas"])->pluck('id')->toArray();
                $withpivot = [];
                foreach ($communes as $commune) {
                    $withpivot[$commune] = [ "price" => $value["price"]];
                }
                $user->communes()->attach($withpivot);
            }
            else{
                $communes = Commune::whereIn('wilaya_id', $value["wilayas"])->pluck('id')->toArray();
                $communes = array_unique(array_merge($communes, $value["communes"]));
                $withpivot = [];
                foreach ($communes as $commune) {
                    $withpivot[$commune] = [ "price" => $value["price"]];
                }
                $user->communes()->attach($withpivot);
            }
        }

        $user->refresh();
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourceStore($user), 201);

    }



    public function api_delivery_get_wilayas(Request $request) {
        $user = $request->user('sanctum');
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        return response(WilayaCommunesResource::collection($wilayas->sortByDesc('name_fr')->values()->all()), 200);
    }


    public function api_delivery_add_wilayas(Request $request){
        $fields = $request->validate([
            '*.price' => 'required|integer',
            '*.wilaya' => 'required|integer'
        ]);
        $user = $request->user('sanctum');

        foreach ($request->all() as $value) {            
            $communes = Commune::where('wilaya_id', $value['wilaya'])->pluck('id')->toArray();
            $withpivot = [];
            foreach ($communes as $commune) {
                $withpivot[$commune] = [ "price" => $value["price"], "price_wilaya" => $value["price"]];
            }
            $user->communes()->attach($withpivot);
        }

        $user->refresh();
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourceStore($user), 201);
    }

    public function api_delivery_update_commune_wilaya(Request $request){
        $fields = $request->validate([
            'price' => 'required|integer',
            'wilaya' => 'integer|nullable|required_if:commune,null',
            'commune' => 'integer|nullable|required_if:wilaya,null'
        ]);
        $user = $request->user('sanctum');

        if($request->input('wilaya')){
            $communes = Commune::where('wilaya_id', $request->input('wilaya'))->get();
            foreach ($communes as $value) {
                $user->communes()->updateExistingPivot($value->id, [ "price" => $request->input('price'), "price_wilaya" => $request->input('price') ] , false);
            }
        }
        else{
            $user->communes()->updateExistingPivot($request->input('commune'), [ "price" => $request->input('price') ] , false);
            //$user->communes()->detach($request->input('commune'));
        }

        /*
        foreach ($request->all() as $value) {
            $user->communes()->updateExistingPivot($value['commune'], [ "price" => $value['price']], false);
        }
        */
        $user->refresh();
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourceStore($user), 201);
    }

    public function api_delivery_delete_communes(Request $request){
        $fields = $request->validate([
            'wilaya' => 'integer|nullable|required_if:commune,null',
            'commune' => 'integer|nullable|required_if:wilaya,null'
        ]);
        $user = $request->user('sanctum');
        if($request->input('wilaya')){
            $communes = Commune::where('wilaya_id', $request->input('wilaya'))->get();
            foreach ($communes as $value) {
                $user->communes()->detach($value->id);
            }
        }
        else{
            $user->communes()->detach($request->input('commune'));
        }
        
        $user->refresh();
        $grouped = $user->communes()->get()->groupBy('wilaya.id');
        $wilayas = collect([]);
        foreach ($grouped as $key => $value) {
            $wilaya = Wilaya::where('id', $key)->firstOrFail();
            $wilaya["communes"] = $value;
            $wilayas->push($wilaya);
        }
        $user["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all();
        return response(new ResourceStore($user), 200);
    }




}

