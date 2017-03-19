@extends('Layout.app')

@section('main-content')

    {{--<div class="content-wrapper">--}}
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            {!! Form::open(array('route'=>'shipment.store', 'method'=>'post' ))!!}
            {{ Form::hidden('tracking_id', rand(1,1000000000000)) }}
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="customer_name">Customer Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="customer_name" class="form-control" placeholder="Customer Name" name="customer_name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="receiver_name">Receiver Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="receiver_name" class="form-control" placeholder="Receiver Name" name="receiver_name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="receiver_contact">Receiver Contact No.</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="receiver_contact" class="form-control" name="receiver_mobile_no">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="shipment_type">Shipment Type</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <select class="form-control " id="shipment_type" name="shipment_type">
                            <option value="">-- Please select --</option>
                            <option value="Roadways">Roadways</option>
                            <option value="Airways">Airways</option>
                            <option value="Waterways">Waterways</option>
                        </select>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="package_type">Package Type</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <select class="form-control show-tick" id="package_type" name="package_id" >
                            <option value="">-- Please select --</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="country_name">Country</label>
                    </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <select class="form-control show-tick" id="delivery_country" name="delivery_country" >
                                    <option value="">-- Please select --</option>
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="city_name">City</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="city_name" class="form-control" placeholder="City" name="delivery_city">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="state_name">State</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="state_name" class="form-control" placeholder="State" name="delivery_state">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="street_name">Street</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="street_name" class="form-control" placeholder="Street" name="delivery_street_name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="home_number">Home Number</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="home_number" class="form-control" placeholder="Home Number" name="delivery_home_no">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="clearfix pad"></div>
            <div align="right" >
                {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Shipment'))}}
                {!! Form::close() !!}

            </div>
        </section>
        <!-- /.content -->

@endsection