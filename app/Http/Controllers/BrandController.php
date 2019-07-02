<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $brand = Brand::create($this->validateRequest());

        $brand->save();

        return redirect('brand')->with('success', 'Brand inserted!');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit',compact('brand'));
    }


    public function update(Brand $brand)
    {
        $brand->update($this->validateRequest());

        return redirect('brand/')->with('success', 'Brand updated!');
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect('brand')->with('success', 'Brand deleted!');
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
        ]);
    }
}
