<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = new Brand();
        return view ('brands.create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $brand = Brand::create($this->validateRequest());
        $this->storeImage($brand);

        $brand->save();

        return redirect('admin/brand')->with('success', 'Brand inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(Brand $brand)
    {
        return view('brands.edit',compact('brand'));
    }


    public function update(Brand $brand)
    {
        $brand->update($this->validateRequest());

        $this->storeImage($brand);

        return redirect('admin/brand/')->with('success', 'Brand updated!');
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();
        Product::where('brand_id',$brand->id)->delete();

        return redirect('admin/brand')->with('success', 'Brand deleted!');
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }
    private function storeImage($brand)
    {
        if (request()->has('image')){
            $brand->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
        $image =Image::make(public_path('storage/' . $brand->image))->fit(250,170);
        $image -> save();
    }
}
