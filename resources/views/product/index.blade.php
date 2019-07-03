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
            <div class="col-sm-12">
                <h1 class="display-3">Product List</h1>
                <div>
                    <a style="margin: 19px;" href="{{ route('product.create')}}" class="btn btn-primary">New Product</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Count</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th colspan="2" class="text-center">Action</th>

                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a href="/product/{{$product->id}}">{{$product->id}}</a></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->desc}}</td>
                            <td>{{$product->count}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                <a href="{{ route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>

                </div>
            </div>
@endsection