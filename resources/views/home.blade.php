@extends('layouts.app')

@section('content')


                    <div class="container">
                        <h5 align="left" style="margin-top: 30px">Shipments</h5>
                        <div class="fixed-action-btn vertical click-to-toggle">
                            <a class="btn-floating btn-large indigo darken-1">
                                <i class="material-icons">add</i>
                            </a>
                            <ul>
                                <li>
                                    <a class="btn-floating tooltipped yellow darken-1" data-position="left" data-delay="20" data-tooltip="Create Shipment" >
                                        <i class="material-icons">input</i></a>
                                </li>
                                <li>
                                    <a data-target="modal1" type="button" class="btn-floating tooltipped green" data-position="left" data-delay="20" data-tooltip="Add Shipment">
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
