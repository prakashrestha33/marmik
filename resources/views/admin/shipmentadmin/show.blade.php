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

        </div>
    @endif

@endsection