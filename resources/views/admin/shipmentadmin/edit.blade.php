@extends('Layout.app')

@section('main-content')
    <div class=" col-md-8 col-md-offset-2">
        <h3>Edit Shipment Details</h3>
        <div class="box box-info clearfix pad">

            {!! Form::model($shipid,array('route'=>['shipment.update',$shipid->id],'method'=>'PUT' ))!!}
            {{ csrf_field() }}



            <div class="form-group{{ $errors->has('customer_name') ? ' has-error' : '' }} clearfix">
                <label for="customer_name" class="col-sm-4 control-label">Customer Name</label>

                <div class="col-sm-8">
                    {{ Form::text('customer_name',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('receiver_name') ? ' has-error' : '' }} clearfix">
                <label for="receiver_name" class="col-sm-4 control-label">Receiver Name</label>

                <div class="col-sm-8">
                    {{ Form::text('receiver_name',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('receiver_mobile_no') ? ' has-error' : '' }} clearfix">
                <label for="receiver_mobile_no" class="col-sm-4 control-label">Contact No.</label>

                <div class="col-sm-8">
                    {{ Form::text('receiver_mobile_no',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('shipment_type') ? ' has-error' : '' }} clearfix">
                <label for="shipment_type" class="col-sm-4 control-label">Shipment Type</label>

                <div class="col-sm-8">
                    {{ Form::text('shipment_type',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }} clearfix">
                <label for="package_id" class="col-sm-4 control-label">Package Type</label>

                <div class="col-sm-8">
                    {{ Form::text('package_id',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_country') ? ' has-error' : '' }} clearfix">
                <label for="delivery_country" class="col-sm-4 control-label">Delivery Country</label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_country',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_state') ? ' has-error' : '' }} clearfix">
                <label for="delivery_state" class="col-sm-4 control-label">Delivery State</label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_state',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_city') ? ' has-error' : '' }} clearfix">
                <label for="delivery_city" class="col-sm-4 control-label">Delivery City</label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_city',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_street_name') ? ' has-error' : '' }} clearfix">
                <label for="delivery_street_name" class="col-sm-4 control-label">Street </label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_street_name',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_home_no') ? ' has-error' : '' }} clearfix">
                <label for="delivery_home_no" class="col-sm-4 control-label">Home No.</label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_home_no',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }} clearfix">
                <label for="departure_date" class="col-sm-4 control-label">Departure Date</label>

                <div class="col-sm-8">
                    {{ Form::text('departure_date',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group{{ $errors->has('delivery_date') ? ' has-error' : '' }} clearfix">
                <label for="delivery_date" class="col-sm-4 control-label">Delivery Date</label>

                <div class="col-sm-8">
                    {{ Form::text('delivery_date',null,array('class'=>'form-control'))}}
                </div>
            </div>


            <div class="clearfix " align="right">
                {{Form::submit('Save Changes', array('class'=>'btn btn-primary btn-sm ','title'=>'Save the changes in the product'))}}
                <a type="button" class="btn btn-warning  btn-sm" href="/product">Cancel</a>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
@endsection
