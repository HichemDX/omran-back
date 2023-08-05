<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category as ResourcesCategory;
use App\Http\Resources\homecategoryproduct;
use Illuminate\Http\Request;
use App\Http\Resources\Slider as ResourcesSlider;
use App\Models\Category;
use App\Models\saving;
use App\Models\Slider;
use App\Models\Wilaya;
use Carbon\Carbon;

class ApiHomeController extends Controller
{
    public function api_home (Request $request) {
        $date1 = Carbon::today();
        $sliders = Slider::whereNull('end')->orWhere('end', '>', $date1->format('Y-m-d 23:59:59'))->get();
        $categories = Category::where(function($query){
            $query->whereNull('parent')
            ->orWhere('parent', '=', 0);
        })->get();
        $savings = [];
        if($request->user('sanctum')){
            $savings = saving::where('customer_id', '=', $request->user('sanctum')->id)->pluck('product_id')->toArray();
        }

        $products_with_category = Category::whereHas('products', function($q){
            $q->whereHas('store', function($q2){
                $q2->where('status', 'ACCEPTED');
            });
        })->where('homepage', '=', 1)->with('products')->get();
        foreach ($products_with_category as $cat) {
            
            foreach ($cat->products as $value) {
                if(in_array($value->id, $savings)){
                    $value['save'] = true;
                }
                $grouped = $value->store()->first()->communes()->get()->groupBy('wilaya.id');
                $wilayas = collect([]);
                foreach ($grouped as $key => $grou) {
                    $wilaya = Wilaya::where('id', $key)->firstOrFail();
                    $wilaya["communes"] = $grou;
                    $wilayas->push($wilaya);
                }      
                $value["wilayas"] = $wilayas->sortByDesc('name_fr')->values()->all(); 
            }
        }
        return response()->json([
            'slider' => ResourcesSlider::collection($sliders),
            'categories' => ResourcesCategory::collection($categories),
            'products_with_category' => homecategoryproduct::collection($products_with_category)
        ], 200);
    }
}
