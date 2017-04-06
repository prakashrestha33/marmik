@extends('Layout.app')

@section('main-content')


        <!-- Main content -->
        <section class="content">
            <h3> Create the batch </h3>
            {!! Form::open(array('route'=>'batch.store', 'method'=>'post' ))!!}


                <div class="row ">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="type"> Tracking No</label>
                    </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="type" class="form-control" placeholder="tracking ids" name="tracking_id">
                                </div>
                            </div>
                        </div>
                </div>


            <div class="clearfix pad"></div>
            <div align="right" >
                {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Batch'))}}
                {!! Form::close() !!}

            </div>
        </section>
        <!-- /.content -->

@endsection