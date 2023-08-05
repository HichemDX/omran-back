<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Terme as ResourcesTerme;
use App\Http\Resources\About as ResourcesAbout;
use App\Models\Faq;
use App\Http\Resources\Question as ResourcesQuestion;
use App\Http\Resources\InfoApp as ResourcesInfoApp;
use App\Models\Informations;
use App\Models\Setting;

class ApiSettingController extends Controller
{
    // API

    public function api_Termes() {
        $response = Setting::first();
        return response(new ResourcesTerme($response), 200);
    }

    public function api_about () {
        $response = Setting::first();
        return response(new ResourcesAbout($response), 200);
    }

    public function api_questions() {
        $response = Faq::all();
        return response(ResourcesQuestion::collection($response), 200);
    }

    public function api_info_app() {
        $response = Informations::first();
        if(!$response) {
            $response = Informations::create([
                'address' => '',
                'phone' => '',
                'email' => '',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
            ]);
        }
        return response(new ResourcesInfoApp($response), 200);
    }
}
