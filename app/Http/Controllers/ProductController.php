<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view ('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = new Product();

        return view('product.create',compact('categories','brands','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $product = Product::create($this->validateRequest());
        $this->storeImage($product);
        $product->save();
        return redirect('product')->with('success', 'Product inserted!');
    }



    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.edit',compact('product','categories','brands'));
    }


    public function update(Product $product)
    {
        $product->update($this->validateRequest());
        $this->storeImage($product);
        return redirect('/product')->with('success', 'Product updated!');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product')->with('success', 'Product Deleted!');
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'count' => 'required|numeric',
            'quantity' => 'required|numeric',
            'desc' => 'required|min:3',
            'category_id' => 'required',
            'brand_id' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($product)
    {
        if (request()->has('image')){
            $product->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
        $image =Image::make(public_path('storage/' . $product->image))->fit(200,200);
        $image -> save();
    }
}
