<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SensationApp - Responsive admin template.</title>
    <link rel="shortcut icon" href=" {{ asset('img/favicon.ico')}}">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href=" {{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href=" {{ asset('css/style.css') }}" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/bootstrap-validator/bootstrapValidator.min.css') }}" rel="stylesheet">
    <!--jVector Map [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href=" {{ asset('css/demo/jquery-steps.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href=" {{ asset('css/demo/jasmine.css') }}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src=" {{ asset('plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/print.min.js') }}"></script>
    <script src=" {{ asset('js/jquery-2.1.1.min.js') }}"></script>

</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">
            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="{{ url('admin/home') }}" class="navbar-brand">
                    <i class="fa fa-cube brand-icon"></i>
                    <div class="brand-title">
                        <span class="brand-text">ShopAdminApp</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->
            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">
                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->

                    <!--Profile toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
{{--                    <li id="profilebtn" class="hidden-xs">--}}
{{--                        <a href="JavaScript:void(0);"> <i class="fa fa-user fa-lg"></i> </a>--}}
{{--                    </li>--}}
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Profile toogle button-->
                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">{{ \App\Order::where('status','new')->count() }}</span> </a>
                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <div class="h4 text-muted text-thin mar-no"> Notification </div>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                        <!-- Dropdown list-->

                                        <!-- Dropdown list-->
                                        @foreach(\App\Order::where('status','new')->get() as $id)
                                        <li>
                                            <a href="{{ url('admin/order/'.$id->id) }}" class="media">
                                                <span class="badge badge-success pull-right">New order</span>
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-cart-plus fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">{{ $id->customer->name }}</div>
                                                    <small class="text-muted">{{ $id->created_at->diffForHumans() }}</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="{{ url('admin/orderN') }}" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All New Orders </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->
                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Fullscreen toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="hidden-xs" id="toggleFullscreen">
                        <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Fullscreen toogle button-->

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->
                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                            <span class="pull-right"> <img class="img-circle img-user media-object" src=" {{ asset('img/av1.png') }}" alt="Profile Picture"> </span>
                            <div class="username hidden-xs">{{ Auth::user()->name  }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right with-arrow">
                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="{{ route('logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->
                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->
        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->

        @yield('content')

        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">
                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">
                            <ul id="mainnav-menu" class="list-group">
                                <!--Category name-->
                                <li class="list-header">Navigation</li>
                                <!--Menu list item-->
                                <li>
                                    <a href="{{ url('/admin/home') }}">
                                        <i class="fa fa-home"></i>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </li>
                                <li class="list-divider"></li>
                                <li class="list-header">Admin Activity</li>
                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="menu-title">Product</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="{{ url('admin/product') }}"><i class="fa fa-caret-right"></i> Product List </a></li>
                                        <li><a href="{{ url('admin/product/create') }}"><i class="fa fa-caret-right"></i> Product Add</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cc"></i>
                                        <span class="menu-title">Brand</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="{{ url('admin/brand') }}"><i class="fa fa-caret-right"></i> Brand List </a></li>
                                        <li><a href="{{ url('admin/brand/create') }}"><i class="fa fa-caret-right"></i> Brand Add</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-database"></i>
                                        <span class="menu-title">Category</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="{{ url('admin/category') }}"><i class="fa fa-caret-right"></i> Category List </a></li>
                                        <li><a href="{{ url('admin/category/create') }}"><i class="fa fa-caret-right"></i> Category Add</a></li>
                                    </ul>
                                </li>
                                <li class="list-divider"></li>
                                <li class="list-header">Order Activity</li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="menu-title">Order</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <ul class="collapse">
                                        <li><a href="{{ url('/admin/orders') }}"><i class="fa fa-caret-right"></i> Order List </a></li>
                                        <li><a href="{{ url('/admin/orderN') }}"><i class="fa fa-caret-right"></i> New Orders</a></li>
                                    </ul>
                                </li>

                                <li class="list-divider"></li>
                                <li class="list-header">Our Customer</li>
                                <li>
                                    <a href="{{ url('/admin/customers') }}">
                                        <i class="fa fa-users"></i>
                                        <span class="menu-title">Customer List</span>
                                    </a>
                                </li>

                                <!--Menu list item-->


                            </ul>
                            <!--Widget-->
                            <!--================================-->

                            <!--================================-->
                            <!--End widget-->
                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->
            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

        <!--ASIDE-->
        <!--END ASIDE-->
    </div>
    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            <ul class="footer-list list-inline">
                <li>
                    <p class="text-sm">SEO Proggres</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                    </div>
                </li>
                <li>
                    <p class="text-sm">Online Tutorial</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                </li>
            </ul>
        </div>
        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <p class="pad-lft">&#0169; 2015 Your Company</p>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->

<!--BootstrapJS [ RECOMMENDED ]-->
<script src=" {{ asset('js/bootstrap.min.js') }}"></script>
<!--Fast Click [ OPTIONAL ]-->
<script src=" {{ asset('plugins/fast-click/fastclick.min.js') }}"></script>
<!--Jasmine Admin [ RECOMMENDED ]-->
<script src=" {{ asset('js/scripts.js') }}"></script>
<!--Switchery [ OPTIONAL ]-->
<script src=" {{ asset('plugins/switchery/switchery.min.js') }}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src=" {{ asset('plugins/parsley/parsley.min.js') }}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src=" {{ asset('plugins/jquery-steps/jquery-steps.min.js') }}"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src=" {{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src=" {{ asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<!--Masked Input [ OPTIONAL ]-->
<script src=" {{ asset('plugins/masked-input/bootstrap-inputmask.min.js') }}"></script>
<!--Bootstrap Validator [ OPTIONAL ]-->
<script src=" {{ asset('plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>
<!--Flot Chart [ OPTIONAL ]-->
<script src=" {{ asset('plugins/flot-charts/jquery.flot.min.js') }}"></script>
<script src=" {{ asset('plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
<!--Flot Order Bars Chart [ OPTIONAL ]-->
<script src=" {{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<!--jvectormap [ OPTIONAL ]-->
<script src=" {{ asset('plugins/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src=" {{ asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<!--Easy Pie Chart [ OPTIONAL ]-->
<script src=" {{ asset('plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>

<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/demo/tables-datatables.js') }}"></script>
<!--Fullscreen jQuery [ OPTIONAL ]-->
<script src=" {{ asset('plugins/screenfull/screenfull.js') }}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src=" {{ asset('js/demo/index.js') }}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src=" {{ asset('js/demo/wizard.js') }}"></script>
<!--Demo script [ DEMONSTRATION ]-->
<script src=" {{ asset('js/demo/jasmine.js') }}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src=" {{ asset('js/demo/form-wizard.js') }}"></script>
</body>
</html>
