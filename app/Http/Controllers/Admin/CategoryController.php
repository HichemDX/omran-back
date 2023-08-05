<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Image;

class CategoryController extends Controller
{
    // WEB

    public function categories(){
        $items = Category::all();
        return view('admin.category.categories')->with('urlName', 'categories')->with('categories', $items);
    }

    public function categoriesDatatables(Request $request){
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
        $totalRecords = Category::select('count(*) as allcount')->whereNull('categories.parent')->count(); 
        $totalRecordswithFilter = Category::select('count(*) as allcount')
        ->where('categories.name_fr', 'like', '%' .$searchValue . '%')
        ->whereNull('categories.parent')
        ->orWhere('categories.name_ar', 'like', '%' .$searchValue . '%')
        ->whereNull('categories.parent')
        ->count(); 
        
        $records = Category::orderBy($columnName, $columnSortOrder)
        ->where('categories.name_fr', 'like', '%' .$searchValue . '%')
        ->whereNull('categories.parent')
        ->orWhere('categories.name_ar', 'like', '%' .$searchValue . '%')
        ->whereNull('categories.parent')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'parent' => $record->parent,
                'name_ar' => $record->name_ar,
                'name_fr' => $record->name_fr,
                'icon' => $record->icon,
                'homepage' => $record->homepage,
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

    public function subCategories(){
        $items = Category::all();
        return view('admin.category.categories')->with('urlName', 'subCategories')->with('categories', $items);
    }

    public function subCategoriesDatatables(Request $request){
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
        $totalRecords = Category::select('count(*) as allcount')->whereNotNull('categories.parent')->count(); 
        $totalRecordswithFilter = Category::select('count(*) as allcount')
        ->where('categories.name_fr', 'like', '%' .$searchValue . '%')
        ->whereNotNull('categories.parent')
        ->orWhere('categories.name_ar', 'like', '%' .$searchValue . '%')
        ->whereNotNull('categories.parent')
        ->count(); 
        
        $records = Category::orderBy($columnName, $columnSortOrder)
        ->where('categories.name_fr', 'like', '%' .$searchValue . '%')
        ->whereNotNull('categories.parent')
        ->orWhere('categories.name_ar', 'like', '%' .$searchValue . '%')
        ->whereNotNull('categories.parent')
        ->skip($start) 
        ->take($rowperpage) 
        ->get();
        $data_arr = array(); 
        $sno = $start+1; 
        foreach($records as $record){
            $data_arr[] = array(
                'id' => $record->id,
                'parent' => $record->parent,
                'name_ar' => $record->name_ar,
                'name_fr' => $record->name_fr,
                'icon' => $record->icon,
                'homepage' => $record->homepage,
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

    public function deletecategories(Request $request){
        $flight = Category::findOrFail($request->input('id'));
        $flight->delete();
        return redirect()->back();
    }

    public function updatecategories(Request $request){
        $imageName = null;
        if ($request->hasFile('icon')) {
            $validatedData = $request->validate([
                'icon' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:5000',
            ]);
            $imageName = uniqid().$request->file('icon')->getClientOriginalName();

            //$path = Storage::putFileAs('public/images/categories/', $request->file('icon'), $imageName);
            $image = Image::make($request->file('icon'));
            $image->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(storage_path('app/public/images/categories/'.$imageName), 80);
        }
        $item = Category::findOrFail($request->input('id'));
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input('name_ar');
        if($imageName != null) $item->icon = 'storage/images/categories/'.$imageName;
        $item->homepage = $request->input('homepage') == null || $request->input('homepage') == 'off' ? "0" : 1;
        $item->parent = $request->input('parent');
        $item->save();
        return redirect()->back();
    }

    public function postcategories(Request $request){
        $imageName = null;
        if ($request->hasFile('icon')) {
            $validatedData = $request->validate([
                'icon' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:5000',
            ]);

            $imageName = uniqid().$request->file('icon')->getClientOriginalName();
            //$path = $request->file('icon')->storeAs('public/images/categories', $imageName);
            //$path = Storage::putFileAs('public/images/categories/', $request->file('icon'), $imageName);

            $image = Image::make($request->file('icon'));
            $image->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            });
            if (!file_exists(storage_path('app/public/images/categories/'))) { //Verify if the directory exists
                mkdir(storage_path('app/public/images/categories/'), 0775, true); //create it if do not exists
            }
            $image->save(storage_path('app/public/images/categories/'.$imageName), 80);

        }

        $item = new Category();
        $item->name_fr = $request->input("name_fr");
        $item->name_ar = $request->input('name_ar');
        $item->icon = 'storage/images/categories/'.$imageName;
        $item->homepage = $request->input('homepage') == null || $request->input('homepage') == 'off' ? "0" : 1;
        $item->parent = $request->input('parent');
        $item->save();
        return redirect()->back();
    }

    public function categoriesonoff(Request $request, $id){
        $item = Category::findOrFail($id);
        $item->homepage = $request->input('homepage');
        return $item->save();
    }




    


}
