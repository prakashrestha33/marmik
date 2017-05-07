@extends('Layout.app')

@section('main-content')

    @if(isset($shipid))
        <div class="panel panel-success pad ">
            <div class="panel-heading "><h5>Shipment Info</h5>
            </div>

            <div class="row">
                <label class="col-sm-6 "> Id :</label>
                {{$shipid->id}}
            </div>

            <div class="row">
                <label class="col-sm-6 "> Customer Name :</label>
                {{$shipid->customer_name}}
            </div>
            <div class="row">
                <label class="col-sm-6 "> Receiver Name:</label>
                {{$shipid->receiver_name}}
            </div>
            <div class="row">
                <label class="col-sm-6 "> Sender Contact no.:</label>
                {{$shipid->receiver_mobile_no}}
            </div>
            <div class="row">
                <label class="col-sm-6 "> Delivery status :</label>
                @if($shipid->delivery_status==1)
                    Delivered
                    @else
                    Not Delivered Yet
                    @endif
            </div>
            <div class="row">
                <label class="col-sm-6 "> Delivery Country :</label>
                {{$shipid->delivery_country}}
            </div>

            <div class="row">
                <label class="col-sm-6 "> State :</label>
                {{$shipid->delivery_state}}
            </div>
            <div class="row">
                <label class="col-sm-6 "> Street Name :</label>
                {{$shipid->delivery_street_name}}
            </div>
             <div class="row">
                <label class="col-sm-6 "> Departure date :</label>
                {{$shipid->departure_date}}
            </div>
            <div class="row">
                <label class="col-sm-6 "> Delivery Date :</label>
                {{$shipid->delivery_date}}
            </div>

        </div>
    @endif

@endsection