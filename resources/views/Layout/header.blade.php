<html xmlns="http://www.w3.org/1999/html">
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

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b>T</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Pos</b>Tracker</span>
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
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <li class="active treeview">
                <ul><a href="/admin/shipment">
                        <i class="fa fa-dashboard"></i> <span>Shipment</span>

                    </a></ul>
            </li>
            <li>
                <ul><a href="/admin/package">
                        <i class="fa fa-user"></i> <span>Package</span>

                    </a>
                </ul>

            </li>
            <li>
                <ul><a href="/admin/packages/report">
                        <i class="fa fa-user"></i> <span>Package Report</span>

                    </a>
                </ul>

            </li>
            <li>
                <ul><a href="/admin/customer">
                        <i class="fa fa-user"></i> <span>Customer</span>

                    </a>
                </ul>

            </li>


            @role('admin')
            <li class="active">
                <ul>
                    <a href="/admin/staff">
                        <i class="fa fa-users"></i> <span>Staff</span>
                    </a>
                </ul>
            </li>
            @endrole


        </section>

    </aside>

