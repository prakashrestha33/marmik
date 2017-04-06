@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col s12 m7" style="font-size: 17px">
            <h3 align="left" style="margin-top: 30px">Shipment </h3>
            <div class="row">
                <div class="col s12 m6">
                    <b>Sender Name:</b> {{$result->customer_name}}
                </div>

                <div class="col s12 m6">
                    <b>Receiver Name:</b> {{$result->receiver_name}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Shipment Type:</b> {{$result->shipment_type}}
                </div>

                <div class="col s12 m6">
                    <b>Package Type:</b> {{$result->package_id}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Receiver No.:</b>{{$result->receiver_mobile_no}}
                </div>

                <div class="col s12 m6">
{{--                    <b>Tracking ID:</b> {{$result->tracking_id}}--}}
                </div>
            </div>
            <div class="row">
                <h5>Delivery Address</h5>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Country:</b> {{$result->delivery_country}}
                </div>
                <div class="col s12 m6">
                    <b>State:</b> {{$result->delivery_state}}
                </div>
            </div>
             <div class="row">
                <div class="col s12 m6">
                    <b>City:</b> {{$result->delivery_city}}
                </div>
                <div class="col s12 m6">
                    <b>Street:</b> {{$result->delivery_street_name}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Home No:</b> {{$result->delivery_home_no}}
                </div>
                <div class="col s12 m6">
                    <b>Departure Date:</b> {{$result->departure_date}}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <b>Expected     Delivery Date:</b> {{$result->delivery_date}}
                </div>

            </div>

    </div>
{!!  ($location->latitude.",".$location->longitude) !!}

    <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    <div id="map"></div>
    <script>

        function initMap() {
            var myLatLng = {lat: 27.25 , lng: 85.22};
            {{--var myLatLng = {lat: {{$location->latitude}} , lng: {{$location->longitude }}};--}}

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2xuVlrqaQEmX_QyZNIiAJMBWV3PGBKow&callback=initMap">
    </script>



























    {{--<div class="col s12 m5" style="font-size: 17px">
        <div id="map_canvas" style=" height:400px;"></div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBShym8Shyfuu-7t0nll6rzesjl9TOGf_I"></script>
        <script type="text/javascript">

            var locations =  (27.6863008, 85.3351921);
            // check DOM Ready
            $(document).ready(function () {
                // execute
                (function () {
                    // map options
                    var options = {
                        zoom: 10,
                        center: new google.maps.LatLng(27.6863008, 85.3351921), // centered Nepal
                        mapTypeId: google.maps.MapTypeId.SATTELITE,
                        mapTypeControl: false
                    };
                    // init map
                    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
                    // set multiple marker
                    $.each(locations, function (i, value) {
                        var iconBase = 'https://maps.google.com/mapfiles/ms/icons/';
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(value.latitude, value.longitude),
                            map: map,
                            icon: iconBase + 'red-dot.png',
                            title: 'Click Me ' + i
                        });
                        var info = "<b>" + value.fullname + "</b>";
                        // process multiple info windows
                        (function (marker, i) {
                            // add click event
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow = new google.maps.InfoWindow({
                                    content: info
                                });
                                infowindow.open(map, marker);
                            });
                        })(marker, i);
                    });
                })();
            });
        </script>
    </div>--}}


</div>
@endsection

