@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title" style="font-size: 30px">Package type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('package.create')}}">
                            <span class=" btn btn-larges btn-success" title="Create new package">
                                <i class="fa fa-plus-circle"></i> Create package</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Type ID</th>
                                <th>Type</th>
                                <th>Weight</th>
                                <th>Price </th>
                                <th>Remark </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($package as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td> {{$list->type}}</td>
                                    <td>{{$list->weight}} kg</td>
                                    <td> {{$list->price}}/kg</td>
                                    <td>
                                        <a href="{{route('package.edit',$list->id)}}">
                                            <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                                    data-placement="top" data-content="Edit the {{$list->id}} delivery">
                                                <i class="fa fa-edit"> Edit</i>
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
        <!-- /.row -->
    </section>
    @role('staff')

    @endrole
@endsection