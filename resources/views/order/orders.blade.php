
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
            <h3><i class="fa fa-shopping-cart"></i> Order </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="{{ url('admin/home') }}"> Home </a> </li>
                    <li class="active"> Order </li>
                </ol>
            </div>
        </div>
        <div id="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Order</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover table-vcenter">
                                <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Buyer</th>
                                    <th class="text-center">Amount</th>
                                    <th class="hidden-xs">Ordered date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                    <td>Order #{{ $order->id }}</td>
                                    <td>
                                        <span class="text-semibold">{{ $order->customer->name }}</span>
                                    </td>
                                    <td class="text-center">{{ $order->total_price }} Ks</td>
                                    <td class="hidden-xs">{{ $order->created_at }}</td>
                                    <td>
                                        @if($order->status == 'new')
                                            <div class="label label-table label-warning">New</div>
                                        @elseif($order->status == 'confirm')
                                            <div class="label label-table label-primary">Confirm</div>
                                        @elseif($order->status == 'shipped')
                                            <div class="label label-table label-info">Shipped</div>
                                        @elseif($order->status == 'complete')
                                            <div class="label label-table label-success">Completed</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/order/'.$order->id) }}" role="button" class="btn btn-primary"> Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
