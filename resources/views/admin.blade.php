@extends('Layout.app')

@section('main-content')
                <section class="content">
                    <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    @isset($customer)
                                    <h3>{{count($customer)}}</h3>
                                    @endisset

                                    <p>Total Members</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="/admin/customer" class="small-box-footer">
                                    View All Members <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div >
                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    @isset($shipment)
                                    <h3>{{count($shipment)}}</h3>
                                    @endisset


                                    <p>Total Shipments</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <a href="/admin/shipment" class="small-box-footer">
                                    View All Shipments <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    @isset($pickup)
                                    <h3>{{count($pickup)}}</h3>
                                    @endisset


                                    <p>Total Pickup Requests</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-cloud-upload"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    View Pickup Requests <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="row">
                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    @isset($lostPackage)
                                    <h3>{{count($lostPackage)}}</h3>
                                    @endisset

                                    <p>Lost Shipments</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    View Lost Shipments <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    @isset($shipmenttype)
                                    <h3>{{count($shipmenttype)}}</h3>
                                    @endisset


                                    <p>Shipment Types</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <a href="/admin/shipment_type" class="small-box-footer">
                                    View Shipment Types <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    @isset($package)
                                    <h3>{{count($package)}}</h3>
                                    @endisset


                                    <p>Package Types</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-opencart"></i>
                                </div>
                                <a href="/admin/package" class="small-box-footer">
                                    View Package Types <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </section>


@endsection
