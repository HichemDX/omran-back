<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Unite;
use Carbon\Carbon;
use Illuminate\Http\Request;




class ProductController extends Controller
{
    // WEB
    public function products(){
        $items = Unite::all();
        return view('admin.product.products')->with('unites', $items);
    }

    public function allProductsDatatables(Request $request){
        $draw = $request->get('draw'); 
        $start = $request->get("start"); 
        $rowperpage = $request->get("length"); // Rows display per page 
        $columnIndex_arr = $request->get('order'); 
        $columnName_arr = $request->get('columns'); 
        $order_arr = $request->get('order'); 
        $search_arr = $request->get('search'); 
        $columnIndex = $columnIndex_arr[0]['column']; // Column index 
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name 
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc 
        $searchValue = $search_arr['value'];
        $totalRecords = Product::select('count(*) as allcount')->count(); 
        $totalRecordswithFilter = Product::select('count(*) as allcount')
        ->where('products.name', 'like', '%' .$searchValue . '%')
        ->count(); 
        
        $records = Product::orderBy($columnName, $columnSortOrder)
        ->where('products.name', 'like', '%' .$searchValue . '%')
        ->with('store', 'images', 'unite')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name' => $record->name,
                'description' => $record->description,
                'price' => $record->price,
                'qty' => $record->qty,
                'min_qty' => $record->min_qty,
                'store_id' => $record->store_id,
                'store' => $record->store,
                'unite' => $record->unite,
                'images' => $record->images,
                "created_at" => Carbon::parse($record->created_at)->format('Y-m-d H:i'),
            );
        }
        $response = array(
            "draw" => intval($draw), 
            "iTotalRecords" => $totalRecords, 
            "iTotalDisplayRecords" => $totalRecordswithFilter, 
            "aaData" => $data_arr 
        );
        return json_encode($response);
    }

    public function allProductsByStoreDatatables(Request $request, $id){
        $draw = $request->get('draw'); 
        $start = $request->get("start"); 
        $rowperpage = $request->get("length"); // Rows display per page 
        $columnIndex_arr = $request->get('order'); 
        $columnName_arr = $request->get('columns'); 
        $order_arr = $request->get('order'); 
        $search_arr = $request->get('search'); 
        $columnIndex = $columnIndex_arr[0]['column']; // Column index 
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name 
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc 
        $searchValue = $search_arr['value'];
        $totalRecords = Product::select('count(*) as allcount')->where('store_id', '=', $id)->count(); 
        $totalRecordswithFilter = Product::select('count(*) as allcount')
        ->where('products.name', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->count(); 
        
        $records = Product::orderBy($columnName, $columnSortOrder)
        ->where('products.name', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->with('images', 'unite')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name' => $record->name,
                'description' => $record->description,
                'price' => $record->price,
                'qty' => $record->qty,
                'min_qty' => $record->min_qty,
                'store_id' => $record->store_id,
                'images' => $record->images,
                'unite' => $record->unite,
                "created_at" => Carbon::parse($record->created_at)->format('Y-m-d H:i'),
            );
        }
        $response = array(
            "draw" => intval($draw), 
            "iTotalRecords" => $totalRecords, 
            "iTotalDisplayRecords" => $totalRecordswithFilter, 
            "aaData" => $data_arr 
        );
        return json_encode($response);
    }

    public function oneProducts(Request $request, $id){
        $item = Product::with('store', 'images', 'unite')->findOrFail($id);
        return view('admin.product.productsDetails')->with('product', $item);
    }

    public function deleteproducts(Request $request){
        $item = Product::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }



    
    
    

    
}
