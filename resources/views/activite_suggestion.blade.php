@extends('Classique-template')

@section('title')
    Liste des suggestions
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-activity.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('contenu')
    <div class="container-fluid">
        <br><br>
        @foreach($suggs as $sugg)
        <div class="row">
            <div class="line">
                <div class="col-md-2">
                    <h1>
                        &nbsp; {{$sugg->nom}}
                    </h1>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div id="photo_desc" class="line">
                <div class="col-md-offset-1 col-md-4">
                    <img src="{{$sugg->photo}}">
                </div>
                <div class="col-md-5">
                    <p class="desc">{{$sugg->description}}</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div id="lieu_date" class="line">
                <div class="col-md-offset-1 col-md-4">
                    <h3>LIEU</h3>
                    <h4>{{$sugg->lieu}}</h4>
                </div>
                <div id="horaire" class="col-md-5">
                    <h3>HORAIRES</h3>
                    <h4>{{date("d/m/y H:i", strtotime($sugg->Debut))}} &nbsp; -
                        &nbsp; {{date("d/m/y H:i", strtotime($sugg->Fin))}}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="map_photo" class="line">
                <div id="map" class="col-md-offset-1 col-md-4">

                    {{$place = $sugg->lieu}};
                    <?php
                    if($place != null){
                    $lati = null;
                    $longi = null;
                    $address = $place;
                    $address = urlencode($address);

                    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";


                    $resp_json = file_get_contents($url);
                    $resp = json_decode($resp_json, true);


                    if($resp['status'] == 'OK'){

                    $lat = $resp['results'][0]['geometry']['location']['lat'];
                    $long = $resp['results'][0]['geometry']['location']['lng'];
                    ?>

                    <div id=map style="width:100%;height:400px">

                    </div>
                    <script async defer
                            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBFH_b97Fol2fdBVWAWmSFbevmm5CMu1tg&callback=drawMap"></script>
                    <script>
                        function drawMap() {
                            var pos = {lat:<?php echo $lat ?> , lng:<?php echo $long ?>};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 13,
                                center: pos
                            });
                            var marker = new google.maps.Marker({
                                position: pos,
                                map: map
                            });
                        }
                    </script>
                    <?php
                    }
                    }
                    else {
                        echo "DID NOT RECEIVE LATITUDE AND LONGITUDE DATA";
                    }
                    ?>

                </div>
            </div>
        </div>
        <br><br><br>

    </div>
    @endforeach
@endsection