<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Informations;
use App\Models\Setting;
use Illuminate\Http\Request;



class SettingController extends Controller
{
    // WEB

    public function privacy(){
        $item = Setting::first();
        return view('admin.settings.privacy')->with('privacy_fr', $item == null ? '' : $item->privacy_fr)->with('privacy_ar', $item == null ? '' : $item->privacy_ar);
    }
    public function postprivacy(Request $request){
        $item = Setting::first();
        if($item == null){
            $setting = new Setting();
            if($request->privacy_fr != null) $setting->privacy_fr = $request->privacy_fr;
            if($request->privacy_ar != null) $setting->privacy_ar = $request->privacy_ar;
            $setting->save();
            return redirect()->back();
        }
        else{
            if($request->privacy_fr != null) $item->privacy_fr = $request->privacy_fr;
            if($request->privacy_ar != null) $item->privacy_ar = $request->privacy_ar;
            $item->save();
            return redirect()->back();
        }
    }

    public function terms(){
        $item = Setting::first();
        return view('admin.settings.terms')->with('terms_fr', $item == null ? '' : $item->terms_fr)->with('terms_ar', $item == null ? '' : $item->terms_ar);
    }
    public function postterms(Request $request){
        $item = Setting::first();
        if($item == null){
            $setting = new Setting();
            if($request->terms_fr != null) $setting->terms_fr = $request->terms_fr;
            if($request->terms_ar != null) $setting->terms_ar = $request->terms_ar;
            $setting->save();
            return redirect()->back();
        }
        else{
            if($request->terms_fr != null) $item->terms_fr = $request->terms_fr;
            if($request->terms_ar != null) $item->terms_ar = $request->terms_ar;
            $item->save();
            return redirect()->back();
        }
    }

    public function about(){
        $item = Setting::first();
        return view('admin.settings.about')->with('about_fr', $item == null ? '' : $item->about_fr)->with('about_ar', $item == null ? '' : $item->about_ar);
    }
    public function postabout(Request $request){
        $item = Setting::first();
        if($item == null){
            $setting = new Setting();
            if($request->about_fr != null) $setting->about_fr = $request->about_fr;
            if($request->about_ar != null ) $setting->about_ar = $request->about_ar;
            $setting->save();
            return redirect()->back();
        }
        else{
            if($request->about_fr != null) $item->about_fr = $request->about_fr;
            if($request->about_ar != null) $item->about_ar = $request->about_ar;
            $item->save();
            return redirect()->back();
        }
    }

    public function informations(){
        $item = Informations::first();
        return view('admin.settings.informations')->with('informations', $item);
    }

    public function postinformations(Request $request){
        $item = Informations::first();
        if($item == null){
            $informations = new Informations();
            $informations->address = $request->address;
            $informations->phone = $request->phone;
            $informations->email = $request->email;
            $informations->facebook = $request->facebook;
            $informations->instagram = $request->instagram;
            $informations->twitter = $request->twitter;   
            $informations->save();
            return redirect()->back();
        }
        else{
            $item->address = $request->address;
            $item->phone = $request->phone;
            $item->email = $request->email;
            $item->facebook = $request->facebook;
            $item->instagram = $request->instagram;
            $item->twitter = $request->twitter; 
            $item->save();
            return redirect()->back();
        }

    }


    




}
