{{--@extends('layouts.app')--}}


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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <div class="background" style="background-color: #1565c0; height: 250px;">
        <div class="center-align">
            <img src="{{asset('image/logo_white.PNG')}}" height="120px" width="200px" style="margin-top: 80px">
        </div>
        <div class="center-align" style="margin-top: 20px">
            <div>
                <h5 style="font-size: 19px; font-weight: 300">
                    <a  href="{{ route('login') }}" class="white-text text-darken-1" style="font-family: "><i
                                class="material-icons center-align">person_pin</i> Sign In</a>&nbsp &nbsp &nbsp &nbsp
                    <a href="{{ route('register') }}" class="white-text text-darken-1"><i
                                class="material-icons center-align">assignment_ind</i> Register</a>
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
        <div class="col s12 m3" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">live_help</i>
                <span class="black-text"> <h5 style="text-align: center">Lost Packages</h5><br>
                    <p>Haven't received your package yet?</p>
                    <p>Report your lost packages on the go with PosTracker</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/lost"> Report loss</a>
            </div>
        </div>
        <div class="col s12 m3" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">my_location</i>
                <span class="black-text"> <h5 style="text-align: center">Track Package</h5><br>
                    <p>Getting your package shipped?</p>
                    <p>Track the location of your package in real time using PosTracker</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/track">Track Your Package</a>
            </div>
        </div>
        <div class="col s12 m3" style="text-align: center">
            <div class="card-panel grey lighten-3">
                <i class="material-icons" style="font-size: 50px; text-align: center">shopping_cart</i>
                <span class="black-text"> <h5 style="text-align: center">Request Pickup</h5><br>
                    <p>Shipping right from your doorsteps</p>
                    <p>Shipping services available at your doorsteps with PosTracker</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/pickup">Request Package Pickup</a>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card-panel grey lighten-3" style="text-align: center">
                <i class="material-icons" style="font-size: 50px; text-align: center">shopping_cart</i>
                <span class="black-text"> <h5 style="text-align: center">Request Pickup</h5><br>
                    <p>Haven't received your package yet?</p>
                    <p>Report your lost packages on the go with PosTracker.</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/pickup">Request package pickup</a>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col s12 m3">
            <div class="card-panel grey lighten-3" style="text-align: center">
                <i class="material-icons" style="font-size: 50px; text-align: center">shopping_cart</i>
                <span class="black-text"> <h5 style="text-align: center">Request Pickup</h5><br>
                    <p>Haven't received your package yet?</p>
                    <p>Report your lost packages on the go with PosTracker.</p>
                </span>
                <br>
                <a class="btn btn-primary blue darken-3" href="/package/pickup">Request package pickup</a>
            </div>
        </div>
    </div>

</div>

