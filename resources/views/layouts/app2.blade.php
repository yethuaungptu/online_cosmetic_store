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
    <!--Demo [ DEMONSTRATION ]-->
    <link href=" {{ asset('css/demo/jasmine.css') }}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href=" {{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src=" {{ asset('plugins/pace/pace.min.js') }}"></script>
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
                <a href="index.html" class="navbar-brand">
                    <i class="fa fa-cube brand-icon"></i>
                    <div class="brand-title">
                        <span class="brand-text">SensationApp</span>
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
                    <li id="profilebtn" class="hidden-xs">
                        <a href="JavaScript:void(0);"> <i class="fa fa-user fa-lg"></i> </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Profile toogle button-->
                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <div class="h4 text-muted text-thin mar-no"> Notification </div>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New comments waiting approval</div>
                                                    <small class="text-muted">15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">HDD is full</div>
                                                    <small class="text-muted">50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Write a news article</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Comment Sorting</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New User Registered</div>
                                                    <small class="text-muted">4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
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
                            <div class="username hidden-xs">John Doe</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right with-arrow">
                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#"> <i class="fa fa-user fa-fw fa-lg"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">  <i class="fa fa-envelope fa-fw fa-lg"></i> Messages </a>
                                </li>
                                <li>
                                    <a href="#">  <i class="fa fa-gear fa-fw fa-lg"></i> Settings </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
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
                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="menu-title">E-commerce</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="ecommerce.html"><i class="fa fa-caret-right"></i> Dashboard</a></li>
                                        <li><a href="ecommerce-order.html"><i class="fa fa-caret-right"></i> Order </a></li>
                                        <li><a href="ecommerce-orderview.html"><i class="fa fa-caret-right"></i> Orders View</a></li>
                                        <li><a href="ecommerce-products.html"><i class="fa fa-caret-right"></i> Product List </a></li>
                                    </ul>
                                </li>
                                <li class="list-divider"></li>



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
<script src=" {{ asset('js/jquery-2.1.1.min.js') }}"></script>
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
