<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as ResourcesCustomer;
use Illuminate\Support\Facades\Storage;
use Image;

class ApiCustomerController extends Controller
{
    // API

    public function api_get_my_info(Request $request) {
        return response(new ResourcesCustomer($request->user('sanctum')->load('commune')), 200);
    }

    public function api_set_my_info (Request $request) {
        $fields = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:5000',
            'name' => 'required',
            'phone' => 'required|string',
            'commune' => 'required|integer',
            'route' => 'string',
        ]);
        $user = $request->user('sanctum');
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $user->id.'_'.uniqid().$request->file('image')->getClientOriginalName();
            //$path = Storage::putFileAs('public/images/customers/', $request->file('image'), $imageName);
            $image = Image::make($request->file('image'));
            $image->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            });
            if (!file_exists(storage_path('app/public/images/customers'))) { //Verify if the directory exists
                mkdir(storage_path('app/public/images/customers'), 0775, true); //create it if do not exists
            }
            $image->save(storage_path('app/public/images/customers/'.$imageName), 80);
        }
        if($imageName){
            $user->update([ 
                'image' => $imageName,
                'name' => $fields['name'],
                'phone' => $fields['phone'],
                'commune_id' => $fields['commune'],
                'address' => $fields['route'],
            ]);
        }
        else{
            $user->update([ 
                'name' => $fields['name'],
                'phone' => $fields['phone'],
                'commune_id' => $fields['commune'],
                'address' => $fields['route'],
            ]);
        }
        
        return response(new ResourcesCustomer($user->load('commune')), 201);
    }
}

