@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <p><strong>Name : </strong> {{ $product->name }}</p>
                    <p><strong>Quantity : </strong> {{ $product->quantity }}</p>
                    <p><strong>Price : </strong> {{ $product->price }}</p>
                    <p><strong>Brand : </strong> {{ $product->brand->name }}</p>
                    <p><strong>Category : </strong> {{ $product->category->name }}</p>
                    <p><strong>Count : </strong> {{ $product->count }}</p>
                    <p><strong>Description : </strong> {{ $product->desc }}</p>
                </div>

            </div>
            <p></p>
            @if($product->image)
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-thumbnail">
                    </div>
                </div>
            @endif
@endsection