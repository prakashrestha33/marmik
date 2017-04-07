@extends('Layout.app')

@section('main-content')
@role('admin')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Package type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('staff.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create staff</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th> ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>email </th>
                                <th>Created at </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staff as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td> {{$list->firstName}}</td>
                                    <td>{{$list->lastName}}</td>
                                    <td> {{$list->email}}</td>
                                    <td> {{$list->created_at}}</td>
                                    <td>
                                        <a href="{{route('staff.edit',$list->id)}}">
                                            <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                                    data-placement="top" data-content="Edit the {{$list->id}} delivery">
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
        @endrole

@endsection