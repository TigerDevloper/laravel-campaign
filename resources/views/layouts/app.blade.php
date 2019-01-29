<html lang="en">
<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Campaign Planner') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/vendor/crudbooster/assets/logo_crudbooster.png" >
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="/vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="/vendor/crudbooster/assets/adminlte/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="/vendor/crudbooster/ionic/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="/vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/crudbooster/assets/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">

    <!-- support rtl-->
    
    <link rel="stylesheet" href="/vendor/crudbooster/assets/css/main.css?r=1548529492">

    <!-- load css -->
    <link rel="stylesheet" href="/css/app.css">
    
    <style type="text/css">
        .dropdown-menu-action {
            left: -130%;
        }

        .btn-group-action .btn-action {
            cursor: default
        }

        #box-header-module {
            box-shadow: 10px 10px 10px #dddddd;
        }

        .sub-module-tab li {
            background: #F9F9F9;
            cursor: pointer;
        }

        .sub-module-tab li.active {
            background: #ffffff;
            box-shadow: 0px -5px 10px #cccccc
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            border: none;
        }

        .nav-tabs > li > a {
            border: none;
        }

        .breadcrumb {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
        }

        .form-group > label:first-child {
            display: block
        }
    </style>

    </head>
<body class="skin-red">
<div id="app" class="wrapper">

    <!-- Header -->
<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/') }}" title="" class="logo"> {{ config('app.name', 'Campaign Planner') }}</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

               <!--  <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications" aria-expanded="false">
                        <i id="icon_notification" class="fa fa-bell-o"></i>
                        <span id="notification_count" class="label label-danger" style="display:none">0</span>
                    </a>
                    <ul id="list_notifications" class="dropdown-menu">
                        <li class="header">You Have 0 Notifications</li>
                        <li>
                            
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;"></ul>
                                <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 195.122px; background: rgb(0, 0, 0);"></div>
                                <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                            </div>
                        </li>
                        <li class="footer"><a href="{{ url('admin/notifications') }}">View All</a></li>
                    </ul>
                </li> -->

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/vendor/crudbooster/avatar.jpg" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">Super Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/vendor/crudbooster/avatar.jpg" class="img-circle" alt="User Image">
                            <p>
                                Super Admin
                                <small>Super Administrator</small>
                                <small><em>26 January 2019</em></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('user/profile') }}" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a>
                            </div>
                            <div class="pull-right">
                                
                                
                                <a href="javascript:void(0)" onclick="swal({
                                        title: 'Do you want to logout ?',
                                        type:'info',
                                        showCancelButton:true,
                                        allowOutsideClick:true,
                                        confirmButtonColor: '#DD6B55',
                                        confirmButtonText: 'Logout',
                                        cancelButtonText: 'Cancel',
                                        closeOnConfirm: false
                                        }, function(){document.getElementById('logout-form').submit();});" logout="" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form> 
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Sidebar -->
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/vendor/crudbooster/avatar.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Super Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <div class="main-menu">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <!-- Optionally, you can add icons to the links -->

                <!-- <li data-id="" class=""><a url="{{ url('admin/notifications') }}/admin" class=""><i class="fa fa-dashboard"></i>
                    <span>Dashboard</span> </a>
                </li> -->

                <li class="header">SUPERADMIN</li>
                <li class=" {{str_contains(URL::current(), 'user') ? 'active' : ''}}">
                    <a href="{{ url('user') }}" class="">
                        <i class="fa fa-user "></i> <span>Users</span>
                    </a>
                </li>
                <li class="treeview {{str_contains(URL::current(), 'campaign') ? 'active' : ''}}">
                    <a href="#"><i class="fa fa-flag"></i> <span>Campaigns</span> 
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{str_contains(URL::current(), 'campaign') ? 'active' : ''}}">
                            <a href="{{ url('campaign') }}"><i class="fa fa-bars"></i>
                                <span>Campaigns</span></a></li>
                        <!-- <li class=""><a href="{{ url('campaign_detail') }}"><i class="fa fa-bars"></i>
                                <span>Campaign Details</span></a></li> -->
                    </ul>
                </li>
                <li class="treeview {{str_contains(URL::current(), 'channel') ? 'active' : ''}}">
                    <a href="#"><i class="fa fa-key"></i> <span>Channels</span> 
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{str_contains(URL::current(), '/channel') ? 'active' : ''}}">
                            <a href="{{ url('channel') }}"><i class="fa fa-bars"></i>
                                <span>Channel</span></a></li>
                        <li class="{{str_contains(URL::current(), 'subchannel') ? 'active' : ''}}">
                            <a href="{{ url('subchannel') }}"><i class="fa fa-bars"></i>
                                <span>SubChannel</span></a></li>
                    </ul>
                </li>
                
                
                
            </ul><!-- /.sidebar-menu -->

        </div>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 622px;">
@yield('content')
</div><!-- /.content-wrapper -->


<!-- Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Powered by CRUDBooster
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2019. All Rights Reserved .</strong>
</footer>

</div><!-- ./wrapper -->


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="/vendor/crudbooster/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
@yield('js_section')
<!-- Bootstrap 3.3.2 JS -->
<script src="/vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/vendor/crudbooster/assets/adminlte/dist/js/app.js" type="text/javascript"></script>

<!--BOOTSTRAP DATEPICKER-->
<script src="/vendor/crudbooster/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="/vendor/crudbooster/assets/adminlte/plugins/datepicker/datepicker3.css">

<!--BOOTSTRAP DATERANGEPICKER-->
<script src="/vendor/crudbooster/assets/adminlte/plugins/daterangepicker/moment.min.js"></script>
<script src="/vendor/crudbooster/assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" href="/vendor/crudbooster/assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css">

<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="/vendor/crudbooster/assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css">
<script src="/vendor/crudbooster/assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<link rel="stylesheet" href="/vendor/crudbooster/assets/lightbox/dist/css/lightbox.min.css">
<script src="/vendor/crudbooster/assets/lightbox/dist/js/lightbox.min.js"></script>

<!--SWEET ALERT-->
<script src="/vendor/crudbooster/assets/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="/vendor/crudbooster/assets/sweetalert/dist/sweetalert.css">

<!--MONEY FORMAT-->
<script src="/vendor/crudbooster/jquery.price_format.2.0.min.js"></script>

<!--DATATABLE-->
<link rel="stylesheet" href="/vendor/crudbooster/assets/adminlte/plugins/datatables/dataTables.bootstrap.css">
<script src="/vendor/crudbooster/assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/crudbooster/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>



<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    

    var lang = 'en';
    $(function () {
        $('.input_date').datepicker({
            format: 'yyyy-mm-dd',
                            language: lang
        });

        $('.open-datetimepicker').click(function () {
            $(this).next('.input_date').datepicker('show');
        });

    });

</script>


</body>
</html>