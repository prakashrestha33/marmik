@extends('Layout.app')


@section('main-content')


    <style>
        #map {
            height: 600px;
        }
    </style>

    <h4>Batch Location</h4>
    @if(!isset($location))

        <h3>Batch is not shipped Yet </h3>
        @else
    <div  class="col s12 m6" id="map"></div>
    <script>
        function initMap() {
            var uluru = {lat:<?php echo $location->latitude?>,
                lng: <?php echo $location->longitude?>};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: '<?php echo $location->address_name ?>'
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Zpoo5Nys5kmX5LpMbzYGI98SoX72wf0&callback=initMap">
    </script>


@endif

@endsection