<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Unite;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    public function all(){
        return view('admin.unite.unites');
    }

    public function unitesDatatables(Request $request){
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
        $totalRecords = Unite::select('count(*) as allcount')->count(); 
        $totalRecordswithFilter = Unite::select('count(*) as allcount')
        ->where('unites.name_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('unites.name_ar', 'like', '%' .$searchValue . '%')
        ->count(); 
        
        $records = Unite::orderBy($columnName, $columnSortOrder)
        ->where('unites.name_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('unites.name_ar', 'like', '%' .$searchValue . '%')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name_ar' => $record->name_ar,
                'name_fr' => $record->name_fr,
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

    public function deleteunite(Request $request){
        $item = Unite::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }

    public function updateunite(Request $request){
        $item = Unite::findOrFail($request->input('id'));
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input('name_ar');
        $item->save();
        return redirect()->back();
    }

    public function postunite(Request $request){
        $item = new Unite();
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input('name_ar');
        $item->save();
        return redirect()->back();
    }


}
