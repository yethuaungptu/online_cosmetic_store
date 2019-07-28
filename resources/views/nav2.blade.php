<!DOCTYPE html>
<html lang="en">
<head>
    <title>Three Lady</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,100,200,500,900,800,700,600' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('javascript/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('javascript/template.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jstree.min.js') }}"></script>
    <script src="{{ asset('javascript/common.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascript/global.js') }}" type="text/javascript"></script>
    <script src="{{ asset('owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <style>
        .cart-plus-minus {
            border: 1px solid #cccccc;
            height: 25px;
            text-align: center;
            width: 90px;
            color: #666666;
        }
        .qtybutton {
            background: #cccccc none repeat scroll 0 0;
            height: 100%;
            width: 30%;
        }
        .dec.qtybutton {
            float: left;
        }
        .inc.qtybutton {
            float: right;
        }
        input.cart-plus-minus-box {
            background: transparent none repeat scroll 0 0;
            box-shadow: none;
            font-family: roboto;
            height: 100%;
            margin-bottom: 0;
            padding: 0;
            text-align: center;
            width: 40%;
        }
        .modal-backdrop {
            /* bug fix - no overlay */
            display: none;
        }
    </style>
</head>
<body>
<div class="preloader loader" style="display: block;"> <img src="{{ asset('image/loader.gif') }}"  alt="#"/></div>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                @if(session('customer_key'))
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>{{ session('customer_key')[0][0] }}</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ url('/customer/logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>My Account</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ url('/customer/register') }}">Register</a></li>
                                            <li><a href="{{ url('/customer/login') }}">Login</a></li>
                                        </ul>
                                    </li>
                                @endif

                                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span>Wish List</span><span> (0)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-4 col-xs-6 header-left">
                <div class="shipping">
                    <div class="shipping-img"></div>
                    <div class="shipping-text">+959683434349<span class="shipping-detail">Week From 9:00am To 7:00pm</span></div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-middle">
                <div class="header-middle-top">
                    <div id="logo"> <a href="{{ url('/') }}"><img src="{{ asset('image/logo2.gif') }}" title="E-Commerce" width="60%" alt="E-Commerce" class="img-responsive img-thumbnail" /></a> </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-right">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button">
                        <span id="cart-total">
                            @if( request()->session()->get('cart') )
                                {{ count(request()->session()->get('cart')) }}

                            @else
                                0

                            @endif item(s)
                        </span><i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu">
                        @if( request()->session()->get('cart') )
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                    @foreach(request()->session()->get('cart') as $i=>$id)
                                        <tr>
                                            <td class="text-center"><a href="#">
                                                    @if(\App\Product::find($id)->image)
                                                        <img src="{{ asset('storage/' . \App\Product::find($id)->image) }}" alt="" height="70%"  width="70%" class="img-responsive"></a>
                                                @else
                                                    <img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ asset('image/product/7product50x59.jpg') }}"></a>
                                                @endif
                                            </td>
                                            <td class="text-left"><a href="#">{{ \App\Product::find($id)->name }}</a></td>
                                            <td class="text-right">{{ \App\Product::find($id)->price }}Ks</td>
                                            <td class="text-center"><a class="btn btn-danger btn-xs" href="{{ url('/customer/removeP/'.$i) }}" title="Remove" role="button"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <div>
                                    <p class="text-center"> <span class="btn-viewcart"><a href="{{ url('customer/cartview') }}"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> </p>
                                </div>
                            </li>
                        @else
                            <p class="text-center">No item here</p>
                        @endif
                    </ul>
                </div>
                <div id="search" class="input-group">
                    <form action="{{ url('/search') }}">
                    <input type="text" name="key" value="" placeholder="Search" class="form-control input-lg" />
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                    </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="nav-inner container">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="{{url('/')}}"   class="parent"  >Home</a> </li>
                <li><a href="{{url('/products')}}"   class="parent"  >All Product</a> </li>
                <li><a href="{{ url('/contact') }}" >Contact us</a></li>
                <li><a href="{{ url('customer/invoice') }}" >Last Invoice</a></li>
            </ul>
        </div>
    </div>
</nav>
