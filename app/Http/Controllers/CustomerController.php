<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Customer;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function cartview(Request $request){
        $request->session()->forget('count');
        return view('customer.cart');
    }
    public function checkout(){
        return view('customer.checkout');
    }
    public function login(){
        return view('customer.login');
    }
    public function register(){
        return view('customer.register');
    }
    public function registerUser(Request $request){

        $request ->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|min:11',
            'address' => 'required',
            'city' => 'required',
            'password' => 'required|min:5|same:confirm',
        ]);
        $customer = new Customer([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'password' => Hash::make($request->get('password')),
        ]);

        $customer->save();

        return redirect('/');
    }

    public function loginUser(Request $request){
        $customer = Customer::where('email',$request->input('email'))->first();
        if ($customer && Hash::check($request->input('password'),$customer->password)){
            $request->session()->push('customer_key',collect([$customer->name,$customer->id]));
            if ($request->input('para')){
                return back();
            }else{
                return redirect('/');
            }

        }else{
            return back();
        }

    }

    public function logout(Request $request){
        $request->session()->forget('customer_key');
        return redirect('/');
    }

    public function cartS(Request $request){
        $request->session()->put('count', $request->input());
        return redirect('/customer/checkout');
    }

    public function invoice(Request $request){
        return view('/customer/invoice');
    }

    public function confirm(Request $request){
         $cart = [];
         foreach ($request->session('cart')->get('cart') as $i=>$id){
             array_push($cart,array('product_id'=>$id,'count'=>$request->session('cart')->get('count')['count'.$i]));

         }
        $customer = Customer::find($request->session('cart')->get('customer_key')[0][1]);
        if ($request->get('shipping_address')=='new'){
            $request ->validate([
                'name' => 'required|min:3',
                'address' => 'required',
                'city' => 'required',
            ]);
        }
         $order = new Order([
             'total_price' => $request->session('cart')->get('count')['sub_tol'],
             'customer_id' => $customer->id,
             'cart' => $cart,
             'name' => ($request->get('shipping_address')=='existing')? $customer->name : $request->get('name'),
             'city' =>  ($request->get('shipping_address')=='existing')? $customer->city : $request->get('city'),
             'address' => ($request->get('shipping_address')=='existing')? $customer->address : $request->get('address'),
         ]);

        $order->save();

        $request->session()->forget('count');
        $request->session()->forget('cart');

        return redirect('/customer/invoice');

    }
}
