@extends('layouts.app2')
@section('title','Edit Details for ' .$brand->name)


@section('content')
    <div id="content-container">
        <div id="profilebody">
            <div class="pad-all animated fadeInDown">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">Users</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">Inbox</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">FAQ</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">Settings</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">Calender</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left"> <p class="profile-title text-bricky">Pictures</p> </div>
                                    <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pageheader">
            <h3><i class="fa fa-cc"></i> Brand </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="{{ url('admin/home') }}"> Home </a> </li>
                    <li class="active"> Brand </li>
                </ol>
            </div>
        </div>
        <div id="page-content">
        <div class="row">
            <div class="col-12">
                <h1>Edit Detail for {{ $brand->name }} </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('brand.update', ['brand' => $brand]) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name') ?? $brand->name}}" class="form-control">
                        <div>
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label for="image">Product Image</label>
                        <input type="file" name="image"  class="form-control">
                        <div>
                            {{ $errors->first('image') }}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Brand</button>


                </form>
            </div>
        </div>
    </div>
    </div>

@endsection