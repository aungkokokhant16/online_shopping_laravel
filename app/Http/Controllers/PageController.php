<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $products = Product::latest()->with('category')->paginate(6);
        return view('user.index',compact('products'));
    }

    public function productDetail(Request $request , $slug){
        //update
        $product = Product::where('slug',$slug);
        $product->update([
            'view_count'=>DB::raw('view_count+1')
        ]);
        //get
        $product = $product->with('category')->first();
        return view('user.productDetail',compact('product'));
    }

    public function addToCart(Request $request, $slug){
        $user_id = Auth::user()->id;
        $product_id = Product::where('slug',$slug)->first()->id;
        $qty = 1;
        ProductCart::create([
            'user_id'=>$user_id,
            'product_id'=>$product_id,
            'qty'=>$qty
        ]);
        return redirect()->back();
    }
}
