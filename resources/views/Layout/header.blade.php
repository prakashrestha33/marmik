<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
{!! Html::style('css/bootstrap.min.css') !!}
<!-- Font Awesome -->
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}
<!-- Ionicons -->
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}
<!-- Theme style -->
{!! Html::style('css/AdminLTE.min.css') !!}
{!!Html::style('css/all.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('css/_all-skins.min.css') !!}
    {!! Html::style('css/custom.css') !!}


    <script>
        var app_url = "{{Request::root()}}";
    </script>

    <style>
        .thisHeader{
            margin-top: -20px;
        }
    </style>

</head>
<body class="hold-transition skin-red sidebar-mini">

    <header class="main-header thisHeader">
        <!-- Logo -->
        <a href="/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b>T</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>PosT</b>racker</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>


            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="material-icons center-align">person_pin</i>
                                        Login
                                </a>
                            </li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="margin-right: 20px"
                                   aria-expanded="false">
                                    {{ Auth::user()->firstName }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>


                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar thisSide">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header">Dashboard</li>
                <li class="treeview">
                    <a href="/admin">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="header">Shipments</li>
                <li class="treeview">
                    <a href="/admin/shipment">
                        <i class="fa fa-map-pin"></i> <span>Shipment</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="/admin/shipment_type">
                        <i class="fa fa-cart-plus"></i> <span>Shipment Type</span>

                    </a>
                </li>
                <li class="treeview">
                    <a href="/admin/package">
                        <i class="fa fa-gift"></i> <span>Packages</span>

                    </a>
                </li>
                <li class="treeview">
                    <a href="/admin/batch">
                        <i class="fa fa-calendar-plus-o"></i> <span>Batch</span>

                    </a>
                </li>
                <li class="treeview">
                    <a href="/admin/packages/report">
                        <i class="fa fa-list-alt"></i> <span>Package Reports</span>

                    </a>
                </li>

                <li class="header">Customer</li>
                <li class="treeview">
                    <a href="/admin/customer">
                        <i class="fa fa-users"></i> <span>Customer</span>

                    </a>
                </li>

                @role('admin')
                <li class="header">Staff</li>
                <li class="treeview">
                        <a href="/admin/staff">
                            <i class="fa fa-users"></i> <span>Staff</span>
                        </a>
                </li>
                @endrole
            </ul>
        </section>
    </aside>

