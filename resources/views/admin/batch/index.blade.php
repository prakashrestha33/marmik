@extends('Layout.app')


@section('main-content')
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Package type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('batch.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Send on batch</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
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
                                    <td> <button> view location</button></td>


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