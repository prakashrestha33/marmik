@extends('Layout.app')

@section('main-content')
    <div class=" col-md-8 col-md-offset-2">
        <h3>Edit  Staff Details</h3>
        <div class="box box-info clearfix pad">

            {!! Form::model($staffid,array('route'=>['staff.update',$staffid->id],'method'=>'PUT' ))!!}
            {{ csrf_field() }}



            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }} clearfix">
                <label for="firstName" class="col-sm-4 control-label">First Name</label>

                <div class="col-sm-8">
                    {{ Form::text('firstName',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }} clearfix">
                <label for="lastName" class="col-sm-4 control-label">Last Name</label>

                <div class="col-sm-8">
                    {{ Form::text('lastName',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} clearfix">
                <label for="email" class="col-sm-4 control-label">email</label>

                <div class="col-sm-8">
                    {{ Form::email('email',null,array('class'=>'form-control'))}}
                </div>
            </div>



            <div class="clearfix " align="right">
                {{Form::submit('Save Changes', array('class'=>'btn btn-success ','title'=>'Save the changes in the product'))}}
                <a type="button" class="btn btn-warning" href="/product">Cancel</a>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
@endsection
