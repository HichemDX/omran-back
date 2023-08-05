<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ResourcesProduct;
use App\Models\Product;
use App\Models\Unite;
use App\Models\Wilaya;

class ApiProductController extends Controller
{
    // API

    public function api_search(Request $request) {
        $word = $request->input('word');
        $wilaya = $request->input('wilaya');
        $communes = $request->input('commune');
        $category = $request->input('category');
        $sou_category = $request->input('sou_category');
        $prix_max = $request->input('prix_max');
        $prix_min = $request->input('prix_min');
        $response = Product::where(function ($q) use($word, $wilaya, $communes, $category, $sou_category, $prix_max, $prix_min) {
            if ($word) {
                $q->where('name', 'like', '%'.$word.'%');
            }
            if ($prix_max) {
                $q->where('price', '<=', $prix_max);
            }
            if ($prix_min) {
                $q->where('price', '>=', $prix_min);
            }
            if ($category) {
                $q->whereHas('categories', function ($query) use($category){
                    if(is_array($category)) return $query->whereIn('id', $category);
                    else return $query->where('id', $category);
                });
            }
            if ($sou_category) {
                $q->whereHas('categories', function ($query) use($sou_category){
                    if(is_array($sou_category)) return $query->whereIn('id', $sou_category);
                    else return $query->where('id', $sou_category);
                });
            }
            if ($communes) {
                $q->whereHas('store', function ($query) use($communes){
                    return $query->whereHas('communes', function ($que) use($communes) {
                        if(is_array($communes)) return $que->whereIn('id', $communes);
                        else return $que->where('id', $communes);
                    });
                });
            }
            if ($wilaya) {
                $q->whereHas('store', function ($query) use($wilaya){
                    return $query->whereHas('communes', function ($que) use($wilaya){
                        return $que->whereHas('wilaya', function ($qu) use($wilaya){
                            return $qu->where('id', '=', $wilaya);
                        });
                    });
                });
            }
        })->with('images', 'unite', 'store', 'categories')->paginate(50);

        foreach ($response as $value) {
            $grouped = $value->store()->first()->communes()->get()->groupBy('wilaya.id');
            $wilayas = collect([]);
            foreach ($grouped as $key => $grou) {
                $wilaya = Wilaya::where('id', $key)->firstOrFail();
                $wilaya["communes"] = $grou;
                $wilayas->push($wilaya);
            }      
            $value["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all(); 
        }

        return response(ResourcesProduct::collection($response), 200);
    }

    public function api_products_stor (Request $request) {
        $category_id = $request->input('category_id');
        $response = Product::where('store_id' ,'=', $request->input('stor_id'))->where(function ($q) use($category_id) {
            if ($category_id) {
                $q->whereHas('categories', function ($qu) use($category_id){
                    return $qu->where('category_id', '=', $category_id);
                });
            }
        })->with('images', 'unite', 'store', 'categories')->paginate(50);
        foreach ($response as $value) {
            $grouped = $value->store()->first()->communes()->get()->groupBy('wilaya.id');
            $wilayas = collect([]);
            foreach ($grouped as $key => $grou) {
                $wilaya = Wilaya::where('id', $key)->firstOrFail();
                $wilaya["communes"] = $grou;
                $wilayas->push($wilaya);
            }      
            $value["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all(); 
        }
        return response(ResourcesProduct::collection($response), 200);
    }

    public function api_favorites(Request $request) {
        //return response(ResourcesProduct::collection($request->user('sanctum')->favorites()->with('store', 'unite')->get()), 200);
        $response = $request->user('sanctum')->savings()->with('store', 'unite', 'categories')->get();
        foreach ($response as $value) {
            $grouped = $value->store()->first()->communes()->get()->groupBy('wilaya.id');
            $wilayas = collect([]);
            foreach ($grouped as $key => $grou) {
                $wilaya = Wilaya::where('id', $key)->firstOrFail();
                $wilaya["communes"] = $grou;
                $wilayas->push($wilaya);
            }      
            $value["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all(); 
        }

        return response(ResourcesProduct::collection($response), 200);
    }

    public function api_set_favorite (Request $request) {
        $fields = $request->validate([
            'product_id' => 'required|integer'
        ]);
        //$request->user('sanctum')->favorites()->attach(['product_id' => $fields['product_id']]);
        $user = $request->user('sanctum');
        $exist = $user->savings()->where('product_id', $fields['product_id'])->first();
        if($exist == null) $user->savings()->attach(['product_id' => $fields['product_id']]);
        return response(['message'=>'done'], 201);
    }

    public function api_remove_favorite (Request $request) {
        $fields = $request->validate([
            'product_id' => 'required|integer'
        ]);
        //$request->user('sanctum')->favorites()->attach(['product_id' => $fields['product_id']]);
        $user = $request->user('sanctum');
        $exist = $user->savings()->where('product_id', $fields['product_id'])->first();
        if($exist != null) $user->savings()->detach($fields['product_id']);
        return response(['message'=>'done'], 201);
    }

    public function api_products_category(Request $request){
        $category_id = $request->input('category_id');
        $response = Product::whereHas('categories', function ($qu) use($category_id){
            return $qu->where('category_id', '=', $category_id);
        })->with('images', 'unite', 'store', 'categories')->paginate(50);
        
        foreach ($response as $value) {
            $grouped = $value->store()->first()->communes()->get()->groupBy('wilaya.id');
            $wilayas = collect([]);
            foreach ($grouped as $key => $grou) {
                $wilaya = Wilaya::where('id', $key)->firstOrFail();
                $wilaya["communes"] = $grou;
                $wilayas->push($wilaya);
            }      
            $value["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all(); 
        }

        return response(ResourcesProduct::collection($response), 200);
    }


}

