@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Shipment Type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('shipment.type.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create Shipment Type</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Type ID</th>
                                <th>Shipment Type</th>
                                <th>Price </th>
                                <th>Remarks </th>
                            </tr>
                            </thead>
                            <tbody>
                               @foreach($stype as $t)
                                <tr>
                                    <td>{{$t->id}}</td>
                                    <td>{{$t->name}}</td>
                                    <td>{{$t->price}}</td>
                                    <td>
                                        <a href="{{route('shipment.type.update',$t->id)}}">
                                            <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                                    data-placement="top" data-content="Edit the {{$t->id}} shipment type">
                                                <i class="fa fa-edit">edit</i>
                                            </button>
                                        </a>

                                    </td>
                                </tr>
                                   @endforeach
                            </tbody>

                        </table>
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

    </section>

    @endsection