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

                    <div align="right" style="padding: 10px">
                        <a href="{{route('shipment.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create shipment</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Shipment ID</th>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Date of Departure</th>
                                <th>Date of Delivery</th>
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($viewall as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td> {{$list->customer_name}}</td>
                                <td>{{$list->receiver_name}}</td>
                                <td> {{$list->departure_date}}</td>
                                <td>{{$list->delivery_date}}</td>
                                <td>  <div align="right" style="padding: 10px">
                                        <a href="{{route('shipment.show',$list->id)}}">
                                            <span class=" btn btn-sm btn-primary" title="View details">Detail</span>
                                        </a>
                                    </div>
                                </td>
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

    @endrole
@endsection