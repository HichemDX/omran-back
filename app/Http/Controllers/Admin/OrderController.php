<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // WEB

    public function orders(){
        return view('admin.order.orders');
    }

    public function allOrdersDatatables(Request $request){
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
        $totalRecords = Order::select('count(*) as allcount')->count(); 
        $totalRecordswithFilter = Order::select('count(*) as allcount')
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->count(); 
        
        $records = Order::orderBy($columnName, $columnSortOrder)
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->with('store', 'customer', 'commune')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'code' => $record->code,
                'customer_id' => $record->customer_id,
                'store_id' => $record->store_id,
                'name' => $record->name,
                'phone' => $record->phone,
                'address' => $record->address,
                'shipping_cost' => $record->shipping_cost,
                'grand_total' => $record->grand_total,
                'status' => $record->status,
                'store' => $record->store,
                'customer' => $record->customer,
                'commune' => $record->commune,
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

    public function allOrderByStoreDatatables(Request $request, $id){
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
        $totalRecords = Order::select('count(*) as allcount')->where('store_id', '=', $id)->count(); 
        $totalRecordswithFilter = Order::select('count(*) as allcount')
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->count(); 
        
        $records = Order::orderBy($columnName, $columnSortOrder)
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->where('store_id', '=', $id)
        ->with('commune', 'customer')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'code' => $record->code,
                'customer_id' => $record->customer_id,
                'customer' => $record->customer,
                'store_id' => $record->store_id,
                'name' => $record->name,
                'phone' => $record->phone,
                'address' => $record->address,
                'shipping_cost' => $record->shipping_cost,
                'grand_total' => $record->grand_total,
                'status' => $record->status,
                'commune' => $record->commune,
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

    public function allOrdersByCustomerDatatables(Request $request, $id){
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
        $totalRecords = Order::select('count(*) as allcount')->where('customer_id', '=', $id)->count(); 
        $totalRecordswithFilter = Order::select('count(*) as allcount')
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->where('customer_id', '=', $id)
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->where('customer_id', '=', $id)
        ->count(); 
        
        $records = Order::orderBy($columnName, $columnSortOrder)
        ->where('orders.code', 'like', '%' .$searchValue . '%')
        ->where('customer_id', '=', $id)
        ->orWhere('orders.id', 'like', '%' .$searchValue . '%')
        ->where('customer_id', '=', $id)
        ->with('customer', 'store', 'commune')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'code' => $record->code,
                'customer_id' => $record->customer_id,
                'store_id' => $record->store_id,
                'name' => $record->name,
                'phone' => $record->phone,
                'address' => $record->address,
                'shipping_cost' => $record->shipping_cost,
                'grand_total' => $record->grand_total,
                'status' => $record->status,
                'customer' => $record->customer,
                'store' => $record->store,
                'commune' => $record->commune,
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

    public function oneOrder(Request $request, $id){
        $item = Order::with('store', 'customer', 'products', 'commune')->findOrFail($id);
        //return $item;
        //dd($item);
        return view('admin.order.ordersDetails')->with('order', $item);
    }

    



}
