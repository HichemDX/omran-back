<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profile(){
        $item = Admin::findOrFail(Auth::guard('admin')->User()->id);
        return view('admin.profile.profile')->with('user', $item);
    }

    public function updateemail(Request $request){
        $item = Admin::find(Auth::guard('admin')->User()->id);
        $item->email = $request->input("email");
        $item->save();
        Session::flash('success', "Success");
        return redirect()->back();
    }


    public function updatepassword(Request $request){
        $item = Admin::find(Auth::guard('admin')->User()->id);
        $isSame = Hash::check($request->input("oldpassword"), $item->password);
        if($isSame){
            Session::flash('success', "Success");
            $item->password = Hash::make($request->input('password'));
            $item->save();
        }
        else {
            Session::flash('error', "Old password is wrong !!!!!!");
        }
        return redirect()->back();
    }


}
