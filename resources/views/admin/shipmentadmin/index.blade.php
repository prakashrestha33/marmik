@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @role('admin')
                    <div class="box-header">
                        <h3 class="box-title">Shipment Details</h3>
                    </div>
                    @endrole
                    <!-- /.box-header -->
                   @role('staff')
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Shipment ID</th>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Date of Departure</th>
                                <th>Date of Delivery</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($viewall as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td> {{$list->customer_name}}</td>
                                <td>{{$list->receiver_name}}</td>
                                <td> {{$list->customer_name}}</td>
                                <td>{{$list->customer_name}}</td>
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
@endsection