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
        <li><a href="/package/track" class="waves-effect"><i class="material-icons">shopping_cart</i>Track Package</a></li>
        <li><a href="/package/pickup" class="waves-effect"><i class="material-icons">redeem</i>Request Pickup</a></li>
        <li><a href="/package/lost" class="waves-effect"><i class="material-icons">search</i>Lost Packages</a></li>
        <li><div class="divider"></div></li>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons small">menu</i></a>

    <div class="container">
        <h5 align="left" style="margin-top: 30px">Request Pickup</h5>
        <div class="row">
            {!! Form::open(array('route'=>'package.pickup.request', 'method'=>'post' ))!!}

            {{ Form::hidden('customer_id',Auth::user()->id) }}
            <div class="row">

                    <div class="input-field col s6">
                        <input id="receiver_address" type="text" class="validate" name="receiver_address">
                        <label for="receiver_address">Address of Receiver</label>
                    </div>
                <div class="input-field col s6">
                    <input id="contact" type="number" class="validate" name="contact" data-length="10">
                    <label for="contact"> Sender Contact</label>
                </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <label>Date of Pickup</label>
                    <input type="date" class="datepicker" name="pickup_date">
                    </div>

                    <div class="input-field col s6">
                        <input id="weight" type="number" class="validate" name="weight" data-length="10">
                        <label for="weight">Weight</label>
                    </div>
                </div>


                <div class="input-field col m6 s12">
                    <select name="shipment_type">
                        <option value="" disabled selected>Select Shipment Type</option>
                        @foreach($ship_type as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                    </select>
                    <label>Shipment Type</label>
                </div>

                <div class="input-field col m6 s12">
                    <select name="package_id">
                        <option value="" disabled selected>Select Package Type</option>
                        @foreach($package as $pack)
                        <option value="{{$pack->id}}" >{{$pack->type}}</option>
                        @endforeach

                    </select>
                    <label>Package Type</label>
                </div>

        {{Form::submit('Proceed to Checkout', array('class'=>'waves-effect waves-light btn yellow darken-4'))}}
        {!! Form::close() !!}
        </div>
    </div>


@endsection



