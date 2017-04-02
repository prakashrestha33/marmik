@extends('Layout.app')

@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Package Pickup List</h3>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Pickup ID</th>
                                <th>Sender</th>
                                <th>Address of Sender</th>
                                <th>Address of Receiver</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Date of Pickup</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td> John Doe</td>
                                    <td>Kamalpokhari</td>
                                    <td>Dharan</td>
                                    <td>123456</td>
                                    <td>someone@someone.com</td>
                                    <td>2017/03/03</td>
                                    <td>
                                        <a href="">
                                            <span class=" btn btn-sm btn-primary" title="View details">Detail</span>
                                        </a>
                                    </td>
                                </tr>
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