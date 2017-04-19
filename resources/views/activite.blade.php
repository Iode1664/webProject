@extends('Classique-template')

@section('title')
    {{$activity->nom}}
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-activity.css">
@endsection

@section('contenu')
    <div class="container-fluid">
        <br><br>
        <div class="row">
            <div class="line">
                <div class="col-md-2">
                    <h1>
                        &nbsp; {{$activity->nom}}
                    </h1>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div id="photo_desc" class="line">
                <div class="col-md-offset-1 col-md-4">
                    <img src="{{$activity->photo}}">
                </div>
                <div class="col-md-5">
                    <p class="desc">{{$activity->description}}</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div id="lieu_date" class="line">
                <div class="col-md-offset-1 col-md-4">
                    <p>LIEU</p>
                </div>
                <div class="col-md-5">
                    <p>HORAIRES</p>
                    <p>{{date("d/m/y H:i", strtotime($horaires->Debut))}} &nbsp; -
                        &nbsp; {{date("d/m/y H:i", strtotime($horaires->Fin))}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="map_photo" class="line">
                <div class="col-md-offset-1 col-md-4">

                    {{$place = $activity->lieu}};
                    <?php
                    if($place != null){
                    $lati=null;
                    $longi=null;
                    $address = $place;
                    $address = urlencode($address);

                    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";


                    $resp_json = file_get_contents($url);
                    $resp = json_decode($resp_json, true);


                    if($resp['status']=='OK'){

                    $lat = $resp['results'][0]['geometry']['location']['lat'];
                    $long = $resp['results'][0]['geometry']['location']['lng'];
                    ?>

                    <div id=map style="width:100%;height:400px">

                    </div>
                    <script  async defer
                             src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBFH_b97Fol2fdBVWAWmSFbevmm5CMu1tg&callback=drawMap"></script>
                    <script>
                        function drawMap() {
                            var pos = {lat:<?php echo $lat ?> , lng:<?php echo $long ?>};
                            var map  = new google.maps.Map(document.getElementById('map'), {
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
                    else{
                        echo "DID NOT RECEIVE LATITUDE AND LONGITUDE DATA";
                    }
                    ?>


                </div>
                <div class="col-md-5">
                    <p>INSERER CARROUSEL</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="map_photo" class="line">
                <div id="inscription" class="col-md-offset-5 col-md-4">
                    <button type="button" class="btn btn-primary" onclick="inscriptionActivite({{$activity->id}})">S'INSCRIRE</button>
                </div>
            </div>
        </div>
    </div>
@endsection