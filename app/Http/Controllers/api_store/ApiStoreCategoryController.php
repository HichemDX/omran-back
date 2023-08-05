<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiStoreCategoryController extends Controller
{
    

    public function bystore(Request $request){
        $user = $request->user('sanctum');
        $categories = Category::whereHas('products', function($query) use ($user){
            $query->where('store_id', '=', $user->id);
        })->get();
        return response(ResourcesCategory::collection($categories), 200);
    }


}
