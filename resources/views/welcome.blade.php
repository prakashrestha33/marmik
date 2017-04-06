        <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/master/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master/materialize.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<style>
    body {
        background-color: #f5f5f5;
    }

    .theBack {
        font-size: 50px;
        font-weight: 200;
    }

</style>


<div>
    <!--Import jQuery before materialize.js-->


    <div class="background" style="background-color: #1565c0; height: 250px;">
        <div class="center-align">
            <img src="{{asset('image/logo_white.PNG')}}" height="120px" width="200px" style="margin-top: 80px">
        </div>
        <div class="center-align" style="margin-top: 20px">
            <div>
                <h5 style="font-size: 19px; font-weight: 300">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}" class="white-text text-darken-1" style="font-family: "><i
                                    class="material-icons center-align">person_pin</i> Sign In</a>&nbsp &nbsp &nbsp
                        &nbsp
                        <a href="{{ route('register') }}" class="white-text text-darken-1"><i
                                    class="material-icons center-align">assignment_ind</i> Register</a>
                    @else

                        <button class="btn- btn-large red"> {{ Auth::user()->name }}</button><br>

                        <div class="fixed-action-btn vertical click-to-toggle">
                            <a class="btn-floating btn-large blue darken-2" data-tooltip="Bla">
                                <i class="material-icons">person_pin</i>
                            </a>
                            <ul>

                                <li>
                                    <a  href="/profile/{{Auth::user()->id}}/history" class="btn-floating tooltipped green darken-3" data-position="left" data-delay="20" data-tooltip="History" >
                                        <i class="material-icons">restore</i></a>
                                </li>
                                <li>
                                    <a  href="/profile/{{Auth::user()->id}}/password" type="button" class="btn-floating tooltipped yellow accent-3" data-position="left" data-delay="20" data-tooltip="Change Password">
                                        <i class="material-icons">mode_edit</i></a>
                                </li>
                                <li>



                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                                       type="button" class="btn-floating tooltipped red darken-3" data-position="left" data-delay="20" data-tooltip="Logout">
                                        <i class="material-icons">lock_open</i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                </h5>
            </div>
        </div>

    </div>

    <div class="container" style="text-align: center; margin-top: 30px; margin-bottom: 30px">
        <h1 style="font-weight: 200">
            <b style="font-weight: 400">PosTracker</b>
            <span class="theBack"> Is Here to Fulfill All of Your <br> Postal and Cargo Tracking Needs</span>
        </h1>

    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">shopping_cart</i>
                <span class="black-text"> <h5 style="text-align: center">Request Pickup</h5><br>
                    <p>Shipping right from your doorsteps</p>
                    <p>Shipping services available at your doorsteps with PosTracker</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/pickup">Request Pickup</a>
            </div>
        </div>
        <div class="col s12 m4" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">my_location</i>
                <span class="black-text"> <h5 style="text-align: center">Track Package</h5><br>
                    <p>Getting your package shipped?</p>
                    <p>Track the location of your package in real time using PosTracker</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/track">Track Package</a>
            </div>
        </div>
        <div class="col s12 m4" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">live_help</i>
                <span class="black-text"> <h5 style="text-align: center">Lost Packages</h5><br>
                    <p>Haven't received your package yet?</p>
                    <p>Report your lost packages with PosTracker without hassles</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/lost"> Report loss</a>
            </div>
        </div>
    </div>

    <div class="row">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="card collapsible-header"><i class="material-icons">filter_drama</i><b>Package Types</b><br>
                        Various wide range of packages to choose from
                    </div>
                    <div class="collapsible-body">
                        <span>
                            <table class="highlight">
                                <thead>
                                <tr>
                                    <th>Package Type</th>
                                    <th>Weight</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Letters</td>
                                    <td>~1 KG</td>
                                    <td>$2.5</td>
                                </tr>
                                <tr>
                                    <td>Small</td>
                                    <td>1-5 KG</td>
                                    <td>$7.5</td>
                                </tr>
                                <tr>
                                    <td>Medium</td>
                                    <td>5-10 KG</td>
                                    <td>$12.5</td>
                                </tr>
                                <tr>
                                    <td>Large</td>
                                    <td>10-25 KG</td>
                                    <td>$20</td>
                                </tr>
                                <tr>
                                    <td>Extra Large</td>
                                    <td>>25 KG</td>
                                    <td>$40</td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                    </div>
                </li>
            </ul>

        <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="card collapsible-header grey lighten-3"><i class="material-icons">filter_drama</i><b>Shipment Paths</b><br>
                    Ship using the pathway which is the most convinient for you!
                </div>
                <div class="collapsible-body">
                        <span>
                            <table class="highlight">
                                <thead>
                                <tr>
                                    <th>Shipment Method</th>
                                    <th>Price/KM</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Roadways</td>
                                    <td>$3/KM</td>
                                </tr>
                                <tr>
                                    <td>Waterways</td>
                                    <td>$6/KM</td>
                                </tr>
                                <tr>
                                    <td>Airways</td>
                                    <td>$10/KM</td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                </div>
            </li>
        </ul>
    </div>
    <div class="row" style="margin-bottom: 30px; margin-top: 40px">
        <div class="col s8 m8">
            <span><h5 style="font-weight:400">Calculate your Total Cost Before Shipping</h5></span>
            <p>Know the total cost of your shipment without even placing the order. Find out the route that suits
                you</p>
        </div>
        <div class="col s4 m4" style="text-align: center">
            <img src="{{ asset('image/calculator.png') }}" width="140px" height="140px">
        </div>
    </div>
    <div class="row">
        <div class="col s4 m4" style="text-align: center">
            <img src="{{ asset('image/delivery.png') }}" width="140px" height="140px">
        </div>
        <div class="col s8 m8">
            <span><h5  style="font-weight:400">Ship To Any Part of the World</h5></span>
            <p>Your worldwide shipping needs is just a click away with <b>PosTracker</b>. Be a part of this global family.</p>
        </div>
    </div>
    <div class="row" style="margin-bottom: 30px; margin-top: 40px">
        <div class="col s8 m8">
            <span><h5  style="font-weight:400">Track Your Package in Real Time</h5></span>
            <p>Know the total cost of your shipment without even placing the order. Find out the route that suits you</p>
        </div>
        <div class="col s4 m4" style="text-align: center">
            <img src="{{ asset('image/location_pin.png') }}" width="140px" height="140px">
            </div>
    </div>
</div>
    <footer class="page-footer blue darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h4 class="white-text"><b>PosT</b>racker</h4>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="/package/pickup">
                                <i class="material-icons" style="font-size: 20px">shopping_cart</i>
                                Request Pickup
                            </a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/package/track">
                                <i class="material-icons" style="font-size: 20px">my_location</i>
                                Track Package
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 PosTracker Inc.
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/master/materialize.min.js"></script>
