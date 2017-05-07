@extends('Layout.app')


@section('main-content')


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Batch List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('batch.create')}}">
                            <span class=" btn btn-success pad" title="Create a new batch">
                                <i class="fa fa-plus"> Add Batch</i></span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Batch ID</th>
                                <th>tracking Id</th>
                                <th>location</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($batch as $list)
                                <tr>
                                    <td>{{$list->batch_id}}</td>
                                    <td> {{$list->tracking_id}}</td>
                                    <td>  <a href="{{route('batch.location',$list->id)}}">
                                            <span class=" btn btn-warning pad" title="Batch location">
                                                <i class="fa fa-map-pin"> Location</i></span>
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