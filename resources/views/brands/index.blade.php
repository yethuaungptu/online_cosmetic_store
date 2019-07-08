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
                <h1 class="display-3">Brand Add</h1>
                <div>
                    <a style="margin: 19px;" href="{{ route('brand.create')}}" class="btn btn-primary">New Brand</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th colspan="2" class="text-center">Action</th>

                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>
                                @if($brand->image)
                                    <img src="{{ asset('storage/' . $brand->image) }}" alt="" width="70" height="70" class="img-thumbnail">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('brand.edit',$brand->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('brand.destroy', $brand->id)}}" method="post">
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