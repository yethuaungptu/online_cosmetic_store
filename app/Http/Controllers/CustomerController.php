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
        $productsLa = Product::orderBy('created_at','desc')->limit(5)->get();
        $productsBe = Product::orderBy('sale_count','desc')->limit(5)->get();
        return view('customer.home',compact('brands','productsBe','productsLa'));
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
        $products = Product::paginate(12);
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

        return redirect('/customer/login');
    }

    public function loginUser(Request $request){
        $customer = Customer::where('email',$request->input('email'))->first();
        if ($customer && Hash::check($request->input('password'),$customer->password)){
            $request->session()->push('customer_key',collect([$customer->name,$customer->id]));

            if ( session('count')){
                return redirect('/customer/checkout');

            }elseif ($request->input('para')){
                return back();

            }
            else{
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
            Product::where('id',$id)->increment('sale_count',(int)$request->session('cart')->get('count')['count'.$i]);
             Product::where('id',$id)->decrement('quantity',(int)$request->session('cart')->get('count')['count'.$i]);
         }
        $customer = Customer::find($request->session('cart')->get('customer_key')[0][1]);
        if ($request->get('shipping_address')=='new'){
            $request ->validate([
                'name' => 'required|min:3',
                'address' => 'required',
                'phone' => 'required|min:11',
            ]);
        }
         $order = new Order([
             'total_price' => $request->session('cart')->get('count')['sub_tol'],
             'customer_id' => $customer->id,
             'cart' => $cart,
             'status' => 'new',
             'name' => ($request->get('shipping_address')=='existing')? $customer->name : $request->get('name'),
             'phone' =>  ($request->get('shipping_address')=='existing')? $customer->phone : $request->get('phone'),
             'address' => ($request->get('shipping_address')=='existing')? $customer->address : $request->get('address'),
         ]);

        $order->save();

        $request->session()->forget('count');
        $request->session()->forget('cart');

        return redirect('/customer/invoice');

    }
    public function procat($id){
        $products = Product::where('category_id',$id)->paginate(12);
        $category = Category::find($id);
        return view('customer.category',compact('products','category'));
    }

    public function probnd($id){
        $products = Product::where('brand_id',$id)->paginate(12);
        $brand = Brand::find($id);
        return view('customer.brand',compact('products','brand'));
    }
    public function refine(Request $request){
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::where('category_id',$request->query('category'))->where('brand_id',$request->query('brand'))->paginate(100);
        return view('customer.products',compact('categories','brands','products'));
    }
}
