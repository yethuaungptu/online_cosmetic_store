@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Add a Brand</h1>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('brand.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{old('name') ?? $brand->name}}" class="form-control">
                            <div>
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Brand</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection