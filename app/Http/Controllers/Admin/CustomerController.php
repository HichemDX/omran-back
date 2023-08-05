<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;


class CustomerController extends Controller
{

    // WEB

    public function updateBan(Request $request){
        $item = Customer::findOrFail($request->id);
        if($item->ban == 0){
            $item->ban = 1;    
        }
        else{
            $item->ban = 0;
        }
        $item->save();
        return redirect()->back();
    }
    
    public function oneCustomer(Request $request, $id){
        $item = Customer::findOrFail($id);
        return view('admin.customer.customerDetails')->with('customer', $item);
    }

    public function allCustomers(){
        return view('admin.customer.customers')->with('urlName', '');
    }

    public function allCustomersDatatables(Request $request){
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
        $totalRecords = Customer::select('count(*) as allcount')->where('customers.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Customer::select('count(*) as allcount')
        ->where('customers.name', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '=', 0)
        ->orWhere('customers.phone', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '=', 0)
        ->count(); 
        
        $records = Customer::orderBy($columnName, $columnSortOrder)
        ->where('customers.name', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '=', 0)
        ->orWhere('customers.phone', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '=', 0)
        ->withCount('orders')
        ->with('commune')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name' => $record->name,
                'provider' => $record->provider,
                'key' => $record->key,
                'phone' => $record->phone,
                'address' => $record->address,
                'longitude' => $record->longitude,
                'latitude' => $record->latitude,
                'image' => $record->image,
                'norders' => $record->orders_count,
                'ban' => $record->ban,
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

    public function bannedCustomers(){
        return view('admin.customer.customers')->with('urlName', 'banned');
    }

    public function bannedCustomersDatatables(Request $request){
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
        $totalRecords = Customer::select('count(*) as allcount')->where('customers.ban', '!=', 0)->count(); 
        $totalRecordswithFilter = Customer::select('count(*) as allcount')
        ->where('customers.name', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '!=', 0)
        ->orWhere('customers.phone', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '!=', 0)
        ->count(); 
        
        $records = Customer::orderBy($columnName, $columnSortOrder)
        ->where('customers.name', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '!=', 0)
        ->orWhere('customers.phone', 'like', '%' .$searchValue . '%')
        ->where('customers.ban', '!=', 0)
        ->withCount('orders')
        ->with('commune')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name' => $record->name,
                'provider' => $record->provider,
                'key' => $record->key,
                'phone' => $record->phone,
                'address' => $record->address,
                'longitude' => $record->longitude,
                'latitude' => $record->latitude,
                'image' => $record->image,
                'norders' => $record->orders_count,
                'ban' => $record->ban,
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


    





}
