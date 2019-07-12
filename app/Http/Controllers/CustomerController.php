<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Customer;
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

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'address' => 'required',
            'city' => 'required',
            'password' => 'required|min:5',
        ]);
    }
}
