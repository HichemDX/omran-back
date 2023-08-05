<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('admin/login');
    }

    public function loginPost(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('admin.dashboard')->with('success', 'admin logged in successfully');
        }
        else{
            return back()->with('error', 'invalid credentials !!');
        }
    }

    public function dashboard(){
        $storeCount = Store::count();
        $customerCount = Customer::count();
        $productCount = Product::count();
        $categoryCount = Category::count();
        $orderCount = Order::count();
        $stores = Store::where('status', 'like', 'PENDING')->orderBy('created_at', 'desc')->limit(5)->get();
        $orders = Order::orderBy('created_at', 'desc')->limit(5)->with('store', 'customer')->get();
        return view('admin.dashboard')->with('storeCount', $storeCount)->with('customerCount', $customerCount)->with('productCount', $productCount)->with('categoryCount', $categoryCount)->with('orderCount', $orderCount)->with('stores', $stores)->with('orders', $orders);
    }


}


