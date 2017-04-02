@extends('Layout.app')

@section('main-content')
    <div class=" col-md-8 col-md-offset-2">
        <h3>Edit Package type</h3>
        <div class="box box-info clearfix pad">

            {!! Form::model($package,array('route'=>['package.update',$package->id],'method'=>'PUT' ))!!}
            {{ csrf_field() }}



            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} clearfix">
                <label for="type" class="col-sm-4 control-label">Type</label>

                <div class="col-sm-8">
                    {{ Form::text('type',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }} clearfix">
                <label for="weight" class="col-sm-4 control-label">Weight</label>

                <div class="col-sm-8">
                    {{ Form::text('weight',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} clearfix">
                <label for="price" class="col-sm-4 control-label">Price</label>

                <div class="col-sm-8">
                    {{ Form::number('price',null,array('class'=>'form-control'))}}
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
