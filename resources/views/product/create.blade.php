@extends('layouts.app2')

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
            <h3><i class="fa fa-briefcase"></i> Product </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="{{ url('admin/home') }}"> Home </a> </li>
                    <li class="active"> Product </li>
                </ol>
            </div>
        </div>
        <div id="page-content">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Add a Product</h1>
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
                    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @include('product.form')
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection