@extends('Layout.app')

@section('main-content')


        <!-- Main content -->


   <!-- Main content -->
    <section class="content">
        <h2>Create Staff </h2>
                    {!! Form::open(array('route'=>'staff.store', 'method'=>'post' ))!!}

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="firstName">First Name:</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="firstName" class="form-control" placeholder="First Name" name="firstName">
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="lastName">Last Name</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="lastName" class="form-control" placeholder="Last Name" name="lastName">
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="email">Email:</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="password">Password:</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix pad"></div>
        <div align="right" >
            {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Staff'))}}
            {!! Form::close() !!}

        </div>
    </section>
    <!-- /.content -->

    @endsection


