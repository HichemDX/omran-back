<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function onstores(Request $request){
        return view('admin.report.reports');
    }
    public function general(Request $request){
        return view('admin.report.reportsAll');
    }

    public function reportsDatatables(Request $request){
        $draw = $request->get('draw'); 
        $start = $request->get("start"); 
        $rowperpage = $request->get("length");
        $columnIndex_arr = $request->get('order'); 
        $columnName_arr = $request->get('columns'); 
        $order_arr = $request->get('order'); 
        $search_arr = $request->get('search'); 
        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir'];
        $searchValue = $search_arr['value'];
        $totalRecords = Report::select('count(*) as allcount')->whereNotNull('store_id')->count(); 
        $totalRecordswithFilter = Report::select('count(*) as allcount')
        ->whereNotNull('store_id')
        ->count(); 
        
        //$records = Report::orderBy($columnName, $columnSortOrder)
        $records = Report::orderBy('created_at', 'desc')
        ->whereNotNull('store_id')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'reportable_id' => $record->reportable_id,
                'reporting_customer_id' => $record->reporting_customer_id,
                //'reporting_store_id' => $record->reporting_store_id,
                'customer_id' => $record->customer_id,
                'store_id' => $record->store_id,
                'reportable_type' => $record->reportable_type,
                'report_type' => $record->report_type,
                'content' => $record->content,
                'reporting_customer' => $record->reporting_customer,
                //'reporting_store' => $record->reporting_store,
                'customer' => $record->customer,
                'store' => $record->store,
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

    public function allreportsDatatables(Request $request){
        $draw = $request->get('draw'); 
        $start = $request->get("start"); 
        $rowperpage = $request->get("length");
        $columnIndex_arr = $request->get('order'); 
        $columnName_arr = $request->get('columns'); 
        $order_arr = $request->get('order'); 
        $search_arr = $request->get('search'); 
        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir'];
        $searchValue = $search_arr['value'];
        $totalRecords = Report::select('count(*) as allcount')->whereNull('store_id')->count(); 
        $totalRecordswithFilter = Report::select('count(*) as allcount')->whereNull('store_id')
        ->count(); 
        
        //$records = Report::orderBy($columnName, $columnSortOrder)
        $records = Report::orderBy('created_at', 'desc')->whereNull('store_id')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'reportable_id' => $record->reportable_id,
                'reporting_customer_id' => $record->reporting_customer_id,
                //'reporting_store_id' => $record->reporting_store_id,
                'customer_id' => $record->customer_id,
                'store_id' => $record->store_id,
                'reportable_type' => $record->reportable_type,
                'report_type' => $record->report_type,
                'content' => $record->content,
                'reporting_customer' => $record->reporting_customer,
                //'reporting_store' => $record->reporting_store,
                'customer' => $record->customer,
                'store' => $record->store,
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

    public function deletereport(Request $request){
        $item = Report::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }



}
