@extends('layouts.app')

@section('content')


    <div class="container">

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons small">menu</i></a>
        {!! Form::open(array('route'=>'package.report', 'method'=>'post' ))!!}
{{--        {{ csrf_field() }}--}}

        <div class="container">
            <h5 align="left" style="margin-top: 30px">Lost Package Complaint</h5>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name"> Complaint's Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tracking_id" type="number" class="validate" name="tracking_id" data-length="30">
                            <label for="tracking_id">Tracking Number</label>
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
                </form>

                <div align="right" >
                    {{Form::submit('ADD', array('class'=>'btn waves-effect yellow darken-4','title'=>'Save the Shipment'))}}
                    {!! Form::close() !!}

                </div>

            </div>

        </div>
        </body>
        <script> $(".button-collapse").sideNav();</script>
        <script>
            $('.button-collapse').sideNav({
                    menuWidth: 300, // Default is 300
                    edge: 'left', // Choose the horizontal origin
                    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    draggable: true // Choose whether you can drag to open on touch screens
                }
            );</script>
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


        <div class="fixed-action-btn vertical click-to-toggle">
            <a class="btn-floating btn-large indigo darken-1">
                <i class="material-icons">add</i>
            </a>
            <ul>
                <li>
                    <a class="btn-floating tooltipped yellow darken-1" data-position="left" data-delay="20"
                       data-tooltip="Create Shipment">
                        <i class="material-icons">input</i></a>
                </li>
                <li>
                    <a data-target="modal1" type="button" class="btn-floating tooltipped green" data-position="left"
                       data-delay="20" data-tooltip="Add Shipment">
                        <i class="material-icons">shopping_cart</i></a>
                </li>

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
            </ul>
        </div>

    </div>


@endsection
<script>  $('#modal1').modal('close');</script>
