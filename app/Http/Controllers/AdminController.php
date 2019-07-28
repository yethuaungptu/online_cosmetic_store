<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function orders(){
        $orders = Order::paginate(10);
        return view('order.orders',compact('orders'));
    }

    public function detail($id){
        $order = Order::find($id);
        return view('order.detail',compact('order'));
    }
    public function updateO(Request $request){
        Order::where('id',$request->get('id'))->update(['status'=>$request->get('status')]);
        return back();
    }
    public function orderN(){
        $orders = Order::where('status','new')->paginate(10);
        return view('order.orderNew', compact('orders'));
    }
    public function customers(){
        $customers = Customer::all();
        return view('customer.list',compact('customers'));
    }
    public function customersN(){
        $customers = Customer::all();
        return view('customer.listN',compact('customers'));
    }
}
