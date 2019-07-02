@extends('layouts.app')
@section('title','Edit Details for ' .$brand->name)


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Detail for {{ $brand->name }} </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('brand.update', ['brand' => $brand]) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name') ?? $brand->name}}" class="form-control">
                        <div>
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Brand</button>


                </form>
            </div>
        </div>
    </div>

@endsection