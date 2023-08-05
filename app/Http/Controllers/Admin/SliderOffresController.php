<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\SliderOffre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderOffresController extends Controller
{
    public function all(){
        $items = SliderOffre::all();
        return view('admin.slider.offres')->with('offres', $items);
    }

    public function allOffresDatatables(Request $request){
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
        $totalRecords = SliderOffre::select('count(*) as allcount')->count(); 
        $totalRecordswithFilter = SliderOffre::select('count(*) as allcount')
        ->where('slider_offres.name_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.name_ar', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.desc_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.desc_ar', 'like', '%' .$searchValue . '%')
        ->count(); 
        
        $records = SliderOffre::orderBy($columnName, $columnSortOrder)
        ->where('slider_offres.name_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.name_ar', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.desc_fr', 'like', '%' .$searchValue . '%')
        ->orWhere('slider_offres.desc_ar', 'like', '%' .$searchValue . '%')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name_fr' => $record->name_fr,
                'name_ar' => $record->name_ar,
                'desc_fr' => $record->desc_fr,
                'desc_ar' => $record->desc_ar,
                'days' => $record->days,
                'prix' => $record->prix,
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

    public function postoffre(Request $request){
        $item = new SliderOffre();
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input("name_ar");
        $item->desc_fr = $request->input('desc_fr');
        $item->desc_ar = $request->input('desc_ar');
        $item->days = $request->input('days');
        $item->prix = $request->input("prix");
        $item->save();
        return redirect()->back();
    }

    public function deleteoffres(Request $request){
        $item = SliderOffre::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }

    public function updateoffres(Request $request){
        $item = SliderOffre::findOrFail($request->input('id'));
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input("name_ar");
        $item->desc_fr = $request->input('desc_fr');
        $item->desc_ar = $request->input('desc_ar');
        $item->days = $request->input('days');
        $item->prix = $request->input("prix");

        $item->save();
        return redirect()->back();
    }


    
}
