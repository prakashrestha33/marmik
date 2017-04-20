@extends('Layout.app')

@section('main-content')


        <!-- Main content -->
        <section class="content">
            {!! Form::open(array('route'=>'package.store', 'method'=>'post' ))!!}


                <div class="row ">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="type"> Type</label>
                    </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="type" class="form-control" placeholder="type" name="type">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="weight">Weight</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="weight" class="form-control" placeholder="weight in kg " name="weight">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="price">Price</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="price" class="form-control" placeholder="price " name="price">
                            </div>
                        </div>
                    </div>
                </div>


            <div class="clearfix pad"></div>
            <div align="right" >
                {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Add Package'))}}
                {!! Form::close() !!}

            </div>
        </section>
        <!-- /.content -->

@endsection