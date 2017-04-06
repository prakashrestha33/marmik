@extends('Layout.app')

@section('main-content')

    {{--<div class="content-wrapper">--}}
        <!-- Content Header (Page header) -->

        <!-- Main content -->

        <section class="content  col-md-10 ">
            <h3 align=" center">Create Shipment</h3>

            <div class="col-md-offset-2">
            {!! Form::open(array('route'=>'shipment.store', 'method'=>'post' ))!!}
            {{ Form::hidden('tracking_id', rand(1,1000000)) }}
            {{ Form::hidden('delivery_status', 0) }}
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="customer_name">Customer Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="customer_name" class="form-control" placeholder="Customer Name" required name="customer_name">
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
                                <input type="text" id="receiver_name" class="form-control" placeholder="Receiver Name" required name="receiver_name">
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
                                <input type="number" id="receiver_contact" class="form-control" required name="receiver_mobile_no">
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
                            @foreach($ship_type as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach

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
                            @foreach($package as $p)
                                <option value="{{$p->id}}">{{$p->type}}</option>
                           @endforeach

                        </select>
                    </div>
                </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                    <label for="country">Country</label>
                </div>

                <?php $x = Config::get('country');?>

                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <select name="delivery_country" class="form-control" required>
                        <option selected="selected" disabled>Choose Country</option>
                        @foreach($x as $code=>$name)
                            <option value="{{$code}}">
                                {{$name}}
                            </option>
                        @endforeach

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
                                <input type="text" id="city_name" class="form-control" placeholder="City" required name="delivery_city">
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
                                <input type="text" id="state_name" class="form-control" placeholder="State" required name="delivery_state">
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
                                <input type="text" id="home_number" class="form-control" placeholder="Home Number" required name="delivery_home_no">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="departure_date">Departure Date</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" id="departure_date" class="form-control" placeholder="" required name="departure_date">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="delivery_date">Delivery Date</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" id="delivery_date" class="form-control" placeholder="" required name="delivery_date">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix pad"></div>
            <div align="right" >
                {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Shipment'))}}
                {!! Form::close() !!}

            </div>
            </div>
        </section>
        <!-- /.content -->

@endsection