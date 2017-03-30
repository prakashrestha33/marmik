@extends('layouts.app')

@section('content')



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
                        <option value="Airways" >Airways</option>
                        <option value="Roadways">Roadways</option>
                        <option value="Waterways">Waterways</option>
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

        {{Form::submit('Proceed to Checkout', array('class'=>'btn waves-effect yellow darken-4'))}}
        {!! Form::close() !!}
        </div>
    </div>



@endsection


