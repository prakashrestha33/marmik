@extends('layouts.app')

@section('content')



    <div class="container">
        <h5 align="left" style="margin-top: 30px">Request Pickup</h5>
        <div class="row">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="sender_name" type="text" class="validate" name="name">
                        <label for="sender_name">Name of Sender</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="receiver_name" type="text" class="validate" name="receiver_name">
                        <label for="receiver_name">Name of Receiver</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="sender_address" type="text" class="validate" name="sender_address">
                        <label for="sender_address">Address of Sender</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="receiver_address" type="text" class="validate" name="receiver_address">
                        <label for="receiver_address">Address of Receiver</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="contact" type="number" class="validate" name="contact" data-length="10">
                        <label for="contact">Contact</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <label>Date of Pickup</label>
                <input type="date" class="datepicker">
                <div class="input-field col m6 s12">
                    <select name="shipment_select">
                        <option value="" disabled selected>Select Shipment Type</option>
                        <option value="1">Airways</option>
                        <option value="2">Roadways</option>
                        <option value="3">Waterways</option>
                    </select>
                    <label>Shipment Type</label>
                </div>

                <div class="input-field col m6 s12">
                    <select name="package_select">
                        <option value="" disabled selected>Select Package Type</option>
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                    </select>
                    <label>Package Type</label>
                </div>
        </div>

        <div class="input field col s12 m12" align="right">
            <a class="waves-effect yellow darken-4 btn"><i class="material-icons right">done_all</i>Proceed to Checkout</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('input#input_text, textarea#textarea1').characterCounter();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    <script>
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>

@endsection

