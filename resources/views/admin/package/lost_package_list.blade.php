@extends('Layout.app')

@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Package Lost Reports</h3>
                    </div>


                    <div class="box-body">
                        <!-- Main content -->

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Complaint ID</th>
                                <th>Tracking Number</th>
                                <th>Complaint's Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Delivery Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($packagereport as $report)
                                <tr>
                                    <td>{{$report->id}}</td>
                                    <td>{{$report->tracking_id}}</td>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->contact}}</td>
                                    <td>{{$report->email}}</td>
                                    <td>{{$report->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection