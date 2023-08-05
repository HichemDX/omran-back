<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function delete(Request $request){
        $item = Image::findOrFail($request->input('id'));
        $item->delete();
        return redirect()->back();
    }


}
