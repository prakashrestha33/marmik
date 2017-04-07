@extends('layouts.app')
@section('content')

    <ul id="slide-out" class="side-nav" style="margin-top: 50px; margin-right: 250px">
        <li>
            <div class="userView">
                <div class="background" style="background-color: #3949ab">
                </div>
                <a href="#!user"><img class="circle" src="{{ asset('image/person-flat.png')}}"></a>
                <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons">shopping_cart</i>Shipment</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons">redeem</i>Request Pickup</a></li>
        <li><a href="#!" class="waves-effect"><i class="material-icons">search</i>Lost Packages</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="{{route('logout')}}">Log Out</a></li>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons small">menu</i></a>

        <div class="container">
            <h4 align="left" style="margin-top: 30px">History</h4>

                @foreach($pickup as $p)
                <div class="row">
                <div class="col s12 m12">
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <li>



                            <div class="card collapsible-header"><i class="material-icons">filter_drama</i><b>Package Pickup Request</b><br>
                                Date of Pickup Request: {{$p->pickup_date}}
                            </div>
                            <div class="collapsible-body">
                        <span>
                            <div class="row">

                            <div class="col s12 m6">
                                <b>Receiver Address:</b> {{$p->receiver_address}}
                            </div>
                                <div class="col s12 m6">
                                <b>Sender Contact:</b> {{$p->contact}}
                            </div>
                        </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <b>Shipment Type:</b> {{$p->shipment_type}}
                                </div>
                                <div class="col s12 m6">
                                    <b>Packageid:</b>{{$p->type}}
                                </div>
                            </div>
                             <div class="row">
                                <div class="col s12 m6">
                                    <b>Package Approx. weight:</b> {{$p->weight}}kg
                                </div>

                            </div>

                        </span></div>
                        </li>
                    </ul>
                </div>
                </div>
                    @endforeach
        </div>


    @endsection
