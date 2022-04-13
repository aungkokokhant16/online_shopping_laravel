<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        $date = date('Y-m-d');
        // return $date;
        $user_count = User::count();
        $pending_count = ProductOrder::where('status','pending')->whereDate('created_at',$date)->count();
        // return $pending_count;
        $complete_count = ProductOrder::where('status','complete')->whereDate('created_at',$date)->count();
        $orders = ProductOrder::with('user','order')->whereDate('created_at',$date)->get();
        // return $complete_count;
        return view('admin.dashboard.index',compact('user_count','pending_count','complete_count','orders'));
    }

    public function alluser(){
        $user = User::latest()->withCount('order')->paginate(20);
        // return $user;
        return view('admin.user.index',compact('user'));
    }
}
