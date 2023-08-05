<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    
    // API

    public function api_categories () {
        $response = Category::whereNull('parent')->orWhere('parent', '=', 0)->get();
        return response(ResourcesCategory::collection($response), 200);
    }

    public function api_soucategory (Request $request) {
        $response = Category::where('parent', '=', $request->input('category_id'))->get();
        return response(ResourcesCategory::collection($response), 200);
    }


    public function api_categories_by_store($id){
        $categories = Category::whereHas('products', function($query) use ($id){
            $query->where('store_id', '=', $id);
        })->get();
        return response(ResourcesCategory::collection($categories), 200);
    }

}
