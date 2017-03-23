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
                        <select class="form-control " id="type" name="type">
                            <option value="">-- Please select --</option>
                            <option value="Roadways">Small</option>
                            <option value="Airways">Medium</option>
                            <option value="Waterways">Big</option>
                        </select>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
                        <label for="weight">Weight</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <select class="form-control show-tick" id="weight" name="weight" >
                            <option value="">-- Please select --</option>
                            <option value="5-10">(5-10)kg</option>
                            <option value="10-20">(10-20)kg</option>
                            <option value="20-30">(20-30)kg</option>
                            <option value="30-50">(30-50)kg</option>
                        </select>
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
                {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Shipment'))}}
                {!! Form::close() !!}

            </div>
        </section>
        <!-- /.content -->

@endsection