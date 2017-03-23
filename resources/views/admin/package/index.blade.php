@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Package type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('package.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create package</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Type ID</th>
                                <th>Type</th>
                                <th>Weight</th>
                                <th>Price </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($package as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td> {{$list->type}}</td>
                                    <td>{{$list->weight}} kg</td>
                                    <td> {{$list->price}}/kg</td>
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
        <!-- /.row -->
    </section>
    @role('staff')

    @endrole
@endsection