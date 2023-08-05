<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Slider;
use App\Models\SliderOffre;
use Carbon\Carbon;
use Illuminate\Http\Request;



class SliderController extends Controller
{
    // WEB

    public function all(){
        $items = SliderOffre::all();
        return view('admin.slider.sliders')->with('offres', $items);
    }

    public function allSlidersDatatables(Request $request){
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
        $totalRecords = Slider::select('count(*) as allcount')->count(); 
        $totalRecordswithFilter = Slider::select('count(*) as allcount')
        ->where('sliders.name', 'like', '%' .$searchValue . '%')
        ->count(); 
        
        $records = Slider::orderBy($columnName, $columnSortOrder)
        ->where('sliders.name', 'like', '%' .$searchValue . '%')
        ->with('offre')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'name' => $record->name,
                'image' => $record->image,
                'link' => $record->link,
                'begin' => Carbon::parse($record->begin)->format('Y-m-d'),
                'end' => Carbon::parse($record->end)->format('Y-m-d'),
                'slider_offres_id' => $record->slider_offres_id,
                'offre' => $record->offre,
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

    public function postslider(Request $request){
        $imageName = null;
        if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            ]);
            $imageName = uniqid().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images/sliders', $imageName);
        }


        $offre = SliderOffre::find($request->input('slider_offres_id'));

        $date = Carbon::now();
        $date = $date->addDays($offre->days)->format('Y-m-d H:i');

        $item = new Slider();
        $item->name = $request->input("name");
        $item->image = $imageName;
        $item->link = $request->input('link');
        $item->begin = $request->input('begin');
        $item->end = $date;
        $item->slider_offres_id = $request->input('slider_offres_id');
        $item->save();
        return redirect()->back();
    }

    public function deletesliders(Request $request){
        $item = Slider::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }

    public function updatesliders(Request $request){
        $imageName = null;
        if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            ]);
            $imageName = uniqid().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images/sliders', $imageName);
        }
        $item = Slider::findOrFail($request->input('id'));
        $item->name = $request->input("name");
        $item->image = $imageName;
        $item->link = $request->input('link');
        $item->begin = $request->input('begin');
        if($request->input('slider_offres_id') != $item->slider_offres_id){
            $item->slider_offres_id = $request->input('slider_offres_id');
            $offre = SliderOffre::find($request->input('slider_offres_id'));
            $date = Carbon::now();
            $date = $date->addDays($offre->days)->format('Y-m-d H:i');
        }
        
        $item->save();
        return redirect()->back();
    }



    
    

}
