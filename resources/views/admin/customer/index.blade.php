@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @role('admin')
                    <div class="box-header">
                        <h3 class="box-title">Customer Details</h3>
                    </div>


                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Member</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($customerlist as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td> {{$list->name}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->contact}}</td>
                                <td>{{$list->address}}</td>
                                <td>{{$list->member}}</td>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @endrole
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @role('staff')
    <h2>for the staff view</h2>
    @endrole
@endsection