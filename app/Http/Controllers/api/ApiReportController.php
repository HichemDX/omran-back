<?php

namespace App\Http\Controllers\api;

use App\Models\Store;
use App\Mail\SendMail;
use App\Models\Report;
use App\Models\Customer;
use App\Mail\SendMailReset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Store as ResourcesStore;
use App\Http\Resources\Customer as ResourcesCustomer;

class ApiReportController extends Controller
{
    public function report(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'store_id' => 'required|integer|exists:stores,id',
            'report_type' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validate->fails()) {
            return $this->CustumReturn($validate->errors(),false,400);
        }

        $r = Report::create([
            'store_id' => $request->store_id,
            'report_type' => $request->report_type,
            'content' => $request->content,
            'reporting_customer_id' => Auth::user()->id,
        ]);

        return $this->CustumReturn([],true,200);
    }

}
