<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        $brands  = Brand::all();
        $products = Product::all();
        return view('customer.home',compact('brands','products'));
    }
    public function cart($id,Request $request){
        $request->session()->push('cart', $id);

        return back();
    }
    public function clear(Request $request){
        $request->session()->forget('cart');

        return back();
    }

    public function pdetail($id){
        $product = Product::find($id);
        $products = Product::all();
        return view('customer.detail',compact('product','products'));
    }
    public function remove($id,Request $request){
        $request->session()->forget('cart.' .$id);

        return back();
    }
    public function list(){
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('customer.products',compact('categories','brands','products'));
    }
}
