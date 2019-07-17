
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">ORDER #{{ $order->id }} - {{ $order->created_at }}</h3>
                        </div>
                        <div class="panel-body">
                            <!--Default Tabs (Left Aligned)-->
                            <!--===================================================-->
                            <div class="tab-base">
                                <!--Nav Tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> Detail </a> </li>
                                    <li> <a data-toggle="tab" href="#demo-lft-tab-2">Invoice</a> </li>
                                </ul>
                                <!--Tabs Content-->
                                <div class="tab-content">
                                    <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-user"></i> Customer Information </h4>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Customer Name:</td>
                                                            <td>{{ $order->customer->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email:</td>
                                                            <td>{{ $order->customer->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>City:</td>
                                                            <td>{{ $order->customer->city }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number:</td>
                                                            <td>{{ $order->customer->phone }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Order Detail </h4>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Order #:</td>
                                                            <td>{{ $order->id }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order Date & Time:</td>
                                                            <td>{{ $order->created_at }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order Status:</td>
                                                            <td>
                                                                @if($order->status == 'new')
                                                                    <span class="label label-table label-warning">New</span>
                                                                @elseif($order->status == 'confirm')
                                                                    <span class="label label-table label-primary">Confirm</span>
                                                                @elseif($order->status == 'shipped')
                                                                    <span class="label label-table label-info">Shipped</span>
                                                                @elseif($order->status == 'complete')
                                                                    <span class="label label-table label-success">Completed</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Grand Total:</td>
                                                            <td>{{ $order->total_price }} Ks</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-user"></i> Billing Address </h4>
                                                <div class="panel-body">
                                                    <address>
                                                        <strong>{{ $order->customer->name }}</strong><br />
                                                        {{ $order->customer->address }}<br />
                                                        <abbr title="Phone">P:</abbr> {{ $order->customer->phone }}
                                                    </address>
                                                    <address>
                                                        <strong>Email</strong><br />
                                                        <a href="mailto:{{$order->customer->email}}"> {{$order->customer->email}} </a>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Shipping Address </h4>
                                                <div class="panel-body">
                                                    <address>
                                                        <strong>{{ $order->name }}</strong><br />
                                                        {{ $order->address }}<br />
                                                        <abbr title="Phone">P:</abbr> {{ $order->phone }}
                                                    </address>
                                                    <address>
                                                        <strong>Email</strong><br />
                                                        <a href="mailto:{{$order->customer->email}}">{{$order->customer->email}} </a>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Invoice Description </h4>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <td><strong>ItemName</strong></td>
                                                                <td class="text-center"><strong>Price</strong></td>
                                                                <td class="text-center"><strong>Quantity</strong></td>
                                                                <td class="text-right"><strong>Totals</strong></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($order->cart as $id)
                                                                <tr>
                                                                    <td>{{ \App\Product::find($id['product_id'])->name }}</td>
                                                                    <td class="text-center">{{ \App\Product::find($id['product_id'])->price }} Ks</td>
                                                                    <td class="text-center">{{ $id['count'] }}</td>
                                                                    <td class="text-right">{{ \App\Product::find($id['product_id'])->price *  $id['count']}} Ks</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                                <td class="thick-line text-right">{{ $order->total_price }} Ks</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                                <td class="no-line text-right">(pay on delivery)</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                                <td class="no-line text-right">{{ $order->total_price }} Ks</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">

                                                <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Update Order Status </h4>
                                                <div class="panel-body">
                                                    <!-- Inline Form  -->
                                                    <!--===================================================-->
                                                    <form action="{{ url('admin/order') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $order->id }}">
                                                        <div class="form-group col-lg-4">
                                                            <label class="control-label">Order Status</label>
                                                            <select class="form-control" name="status">
                                                                <option value="new" {{ $order->status == 'new' ? 'selected': '' }}>New</option>
                                                                <option value="confirm" {{ $order->status == 'confirm' ? 'selected': '' }}>Confirm</option>
                                                                <option value="shipped" {{ $order->status == 'shipped' ? 'selected': '' }}>Shipped</option>
                                                                <option value="complete" {{ $order->status == 'complete' ? 'selected': '' }}>Complete</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-2 mt-2">
                                                            <label class="control-label"></label>
                                                            <button class="btn btn-primary form-control" type="submit">Update</button>
                                                        </div>


                                                    </form>
                                                    <!--===================================================-->
                                                    <!-- End Inline Form  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="demo-lft-tab-2" class="tab-pane fade">
                                        <div id="printArea">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h3>Invoice</h3>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <h3>Order # {{ $order->id }}</h3>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <address>
                                                    <strong>Billed To:</strong><br />
                                                    {{ $order->customer->name }}<br />
                                                    {{ $order->customer->address }}<br />
                                                    {{ $order->customer->phone }} <br />
                                                </address>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <address>
                                                    <strong>Shipped To:</strong><br />
                                                    {{ $order->name }}<br />
                                                    {{ $order->address }}<br />
                                                    {{ $order->phone }}<br />
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row pad-btm">
                                            <div class="col-xs-6">
                                                <strong>Payment Method:</strong><br />
                                                Cash on deliver<br />

                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <strong>Order Date:</strong><br />
                                                {{ $order->created_at }}<br />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <td><strong>ItemName</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                                    <td class="text-right"><strong>Totals</strong></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @foreach($order->cart as $id)
                                                                    <tr>
                                                                        <td>{{ \App\Product::find($id['product_id'])->name }}</td>
                                                                        <td class="text-center">{{ \App\Product::find($id['product_id'])->price }} Ks</td>
                                                                        <td class="text-center">{{ $id['count'] }}</td>
                                                                        <td class="text-right">{{ \App\Product::find($id['product_id'])->price *  $id['count']}} Ks</td>
                                                                    </tr>
                                                                @endforeach

                                                                <tr>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                                    <td class="thick-line text-right">{{ $order->total_price }} Ks</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                                                    <td class="no-line text-right">(pay on delivery)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Total</strong></td>
                                                                    <td class="no-line text-right">{{ $order->total_price }} Ks</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="text-right">
                                        <button id="printInvoice" class="btn btn-info text-right"><i class="fa fa-print"></i> Print</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Default Tabs (Left Aligned)-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#printInvoice').click(function(){
            printJS({
                printable: 'printArea',
                type: 'html',
                targetStyles: ['*']
            })
        });
    </script>
@endsection
