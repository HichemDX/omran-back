<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Store;
use Illuminate\Http\Request;
use Carbon\Carbon;


class StoreController extends Controller
{
    // WEB

    public function oneStores(Request $request, $id){
        $item = Store::findOrFail($id);
        return view('admin.store.storesDetails')->with('store', $item);
    }

    public function allStores(){
        return view('admin.store.stores')->with('urlName', '');
    }
    public function allStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

    public function updateStatus(Request $request, $id){
        $item = Store::findOrFail($id);
        $item->status = $request->input('status');
        return $item->save();
    }

    public function updateStatusBan(Request $request, $id){
        $item = Store::findOrFail($id);
        $item->status = $request->input('status');
        $item->ban = $request->input('ban');
        $item->save();
        return redirect()->back();
    }

    public function updateBan(Request $request){
        $item = Store::findOrFail($request->id);
        if($item->ban == 0){
            $item->ban = 1;    
        }
        else{
            $item->ban = 0;
        }
        $item->save();
        return redirect()->back();
    }

    public function newStores(){
        return view('admin.store.stores')->with('urlName', 'new');
    }

    public function newStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

    public function confirmedStores(){
        return view('admin.store.stores')->with('urlName', 'confirmed');
    }
    public function confirmedStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '=', 0)
        ->where('stores.status', 'like', 'ACCEPTED')
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'ACCEPTED')
        ->where('stores.ban', '=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'ACCEPTED')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'ACCEPTED')
        ->where('stores.ban', '=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

    public function refusedStores(){
        return view('admin.store.stores')->with('urlName', 'refused');
    }
    public function refusedStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'REFUSED')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'REFUSED')
        ->where('stores.ban', '=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'REFUSED')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'REFUSED')
        ->where('stores.ban', '=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

    public function bannedStores(){
        return view('admin.store.stores')->with('urlName', 'banned');
    }
    public function bannedStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '!=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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
    
    public function bannedStoresDatatablesstatus(Request $request, $status){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '!=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->where('stores.status', 'like', $status)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->where('stores.status', 'like', $status)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->where('stores.status', 'like', $status)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.ban', '!=', 0)
        ->where('stores.status', 'like', $status)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

    public function pendingStoresDatatables(Request $request){
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
        $totalRecords = Store::select('count(*) as allcount')->where('stores.ban', '=', 0)->count(); 
        $totalRecordswithFilter = Store::select('count(*) as allcount')
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'PENDING')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'PENDING')
        ->where('stores.ban', '=', 0)
        ->count(); 
        
        $records = Store::orderBy($columnName, $columnSortOrder)
        ->where('stores.name', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'PENDING')
        ->where('stores.ban', '=', 0)
        ->orWhere('stores.phone', 'like', '%' .$searchValue . '%')
        ->where('stores.status', 'like', 'PENDING')
        ->where('stores.ban', '=', 0)
        ->withCount('orders', 'products')
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
                'phone' => $record->phone,
                'address' => $record->address,
                'status' => $record->status,
                'ban' => $record->ban,
                'image' => $record->image,
                'nprods' => $record->products_count,
                'norders' => $record->orders_count,
                'min_amount_order' => $record->min_amount_order,
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

