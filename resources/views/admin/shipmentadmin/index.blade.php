@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Shipment Details</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('shipment.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create shipment</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Tracking ID</th>
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
                                <td>{{$list->tracking_id}}</td>
                                <td> {{$list->customer_name}}</td>
                                <td>{{$list->receiver_name}}</td>
                                <td> {{$list->departure_date}}</td>
                                <td>{{$list->delivery_date}}</td>
                                <td>
                                        <a href="{{route('shipment.show',$list->id)}}">
                                            <span class=" btn btn-sm btn-primary" title="View details">Detail</span>
                                        </a>
                                    <a href="{{route('shipment.edit',$list->id)}}">
                                        <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                                data-placement="top" data-content="Edit the {{$list->id}} delivery">
                                            <i class="fa fa-edit">edit</i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

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