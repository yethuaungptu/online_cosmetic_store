
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
            <h3><i class="fa fa-home"></i> Dashboard </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Dashboard </li>
                </ol>
            </div>
        </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-left widgetbox-icon-danger"> <span class="fa fa-shopping-cart"></span> </div>
                            <div class="widgetbox-data">
                                <div class="widgetbox-int"> {{ \App\Order::count() }}</div>
                                <div class="widgetbox-title"> Total Orders </div>
                                <div class="widgetbox-subtitle"> From our website and app </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-right widgetbox-icon-warning"> <span class="fa fa-database"></span> </div>
                            <div class="widgetbox-data-left">
                                <div class="widgetbox-int"> {{ \App\Product::count() }} </div>
                                <div class="widgetbox-title"> Total Products</div>
                                <div class="widgetbox-subtitle"> at our shop </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-left widgetbox-icon-success"> <span class="fa fa-users"></span> </div>
                            <div class="widgetbox-data">
                                <div class="widgetbox-int"> {{ \App\Customer::count() }} </div>
                                <div class="widgetbox-title"> Registred users </div>
                                <div class="widgetbox-subtitle"> On our website and app </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-right widgetbox-icon-info"> <span class="fa fa-dollar"></span> </div>
                            <div class="widgetbox-data-left">
                                <div class="widgetbox-int"> {{ \App\Order::sum('total_price') }} Ks</div>
                                <div class="widgetbox-title"> Total Sale </div>
                                <div class="widgetbox-subtitle"> Our shop </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-left widgetbox-icon-primary"> <span class="fa fa-folder"></span> </div>
                            <div class="widgetbox-data">
                                <div class="widgetbox-int"> {{ \App\Category::count() }}</div>
                                <div class="widgetbox-title"> Total Category </div>
                                <div class="widgetbox-subtitle"> At our shop </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="widgetbox widgetbox-default widgetbox-item-icon">
                            <div class="widgetbox-item-right widgetbox-icon-warning"> <span class="fa fa-cc"></span> </div>
                            <div class="widgetbox-data-left">
                                <div class="widgetbox-int"> {{ \App\Brand::count() }} </div>
                                <div class="widgetbox-title"> Total Brands</div>
                                <div class="widgetbox-subtitle"> at our shop </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recent Order Activity</h3>
                            </div>
                            <!--Hover Rows-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <table class="table table-hover table-vcenter">
                                    <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Customer Name</th>
                                        <th class="text-center">Amount</th>
                                        <th class="hidden-xs">Order date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Order::orderBy('id','desc')->take(5)->get() as $id)
                                    <tr>
                                        <td>Order #{{ $id->id }}</td>
                                        <td>
                                            <span class="text-semibold">{{ $id->name }}</span>
                                        </td>
                                        <td class="text-center">{{ $id->total_price }} Ks</td>
                                        <td class="hidden-xs">{{ $id->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if($id->status == 'new')
                                                <div class="label label-table label-warning">New</div>
                                            @elseif($id->status == 'confirm')
                                                <div class="label label-table label-primary">Confirm</div>
                                            @elseif($id->status == 'shipped')
                                                <div class="label label-table label-info">Shipped</div>
                                            @elseif($id->status == 'complete')
                                                <div class="label label-table label-success">Completed</div>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!--===================================================-->
                            <!--End Hover Rows-->
                        </div>
                    </div>
                </div>
                </div>
    </div>
@endsection
