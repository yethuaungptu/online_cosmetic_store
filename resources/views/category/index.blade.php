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
                <h1 class="display-3">Category Add</h1>
                <div>
                    <a style="margin: 19px;" href="{{ route('category.create')}}" class="btn btn-primary">New menu</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2" class="text-center">Action</th>

                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{ route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('category.destroy', $category->id)}}" method="post">
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