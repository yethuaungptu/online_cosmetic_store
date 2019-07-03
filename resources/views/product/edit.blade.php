@extends('layouts.app')
@section('title','Edit Details for ' .$product->name)


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Detail for {{ $product->name }} </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('product.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @include('product.form')

                    <button type="submit" class="btn btn-primary">Update Product</button>


                </form>
            </div>
        </div>
    </div>

@endsection