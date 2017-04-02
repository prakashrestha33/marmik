@extends('layouts.app')

@section('content')


        <div class="container" style="font-size: 17px">
            <h3 align="left" style="margin-top: 30px">Shipment </h3>
            <div class="row">
                <div class="col s12 m6">
                    <b>Sender Name:</b> {{$result->customer_name}}
                </div>

                <div class="col s12 m6">
                    <b>Receiver Name:</b> {{$result->receiver_name}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Shipment Type:</b> {{$result->shipment_type}}
                </div>

                <div class="col s12 m6">
                    <b>Package Type:</b> {{$result->package_id}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Receiver No.:</b>{{$result->receiver_mobile_no}}
                </div>

                <div class="col s12 m6">
                    <b>Tracking ID:</b> {{$result->tracking_id}}
                </div>
            </div>
            <div class="row">
                <h5>Delivery Address</h5>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Country:</b> {{$result->delivery_country}}
                </div>
                <div class="col s12 m6">
                    <b>State:</b> {{$result->delivery_state}}
                </div>
            </div>
             <div class="row">
                <div class="col s12 m6">
                    <b>City:</b> {{$result->delivery_city}}
                </div>
                <div class="col s12 m6">
                    <b>Street:</b> {{$result->delivery_street_name}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Home No:</b> {{$result->delivery_home_no}}
                </div>
                <div class="col s12 m6">
                    <b>Departure Date:</b> {{$result->departure_date}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Expected     Delivery Date:</b> {{$result->delivery_date}}
                </div>

            </div>

    </div>


@endsection

