@extends('layouts.app')

@section('content')


    <div class="container">

        {!! Form::open(array('route'=>'package.gettrack', 'method'=>'post' ))!!}

        <div class="container">
            <h5 align="left" style="margin-top: 30px"> Package Tracking</h5>
            <div class="row">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tracking_id" type="text" class="validate" name="tracking_id">
                            <label for="tracking_id"> Tracking Id</label>
                        </div>
                    </div>


                <div align="right" >
                    {{Form::submit('Send', array('class'=>'btn waves-effect yellow darken-4','title'=>'Save the Shipment'))}}
                    {!! Form::close() !!}

                </div>

            </div>

        </div>

    </div>


@endsection

