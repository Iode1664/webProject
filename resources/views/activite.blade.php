@extends('Classique-template')

@section('title')
    {{$activity->nom}}
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-activity.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                <div class="col-md-offset-1 col-md-4">
                    <p class="desc">{{$activity->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="lieu_date" class="line">
                <div class="col-md-offset-1 col-md-4 gg">
                    <h3>LIEU</h3>
                    <h4>{{$activity->lieu}}</h4>
                </div>
                <div id="horaire" class="col-md-offset-1 col-md-3 gh">
                    <h3>HORAIRES</h3>
                    <h4>{{date("d/m/y H:i", strtotime($horaires->Debut))}} &nbsp; -
                        &nbsp; {{date("d/m/y H:i", strtotime($horaires->Fin))}}</h4>
                </div>
            </div>
        </div>

        <br><br><br><br>
        <div class="row">
            <div id="map_photo" class="line">
                <div id="map" class="col-md-offset-1 col-md-4">

                    {{$place = $activity->lieu}};
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

                @if($photos == null || $Firstphoto == null)
                    <div class="col-md-5">

                        <a href="{{route('activity.gallery',['id'=>$activity->id])}}">
                            <div id="ourCarousel" class="carousel slide" data-ride="carousel">

                                <!--Carousel indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#ourCarousel" data-slide-to="0" class="active"></li>
                                </ol>
                                <!--Carousel items-->
                                <div class="carousel-inner" style=" width:100%; height: 40rem;">
                                    <div class="item active">
                                        <img src="/../webProject/public/images/photos_bientot.png" width="100%">
                                    </div>
                                </div>

                                <!--Carousel navigation-->
                                <a class="carousel-control left" href="#ourCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>

                                <a class="carousel-control right" href="#ourCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>

                            </div>
                        </a>
                    </div>

                @else
                    <div class=" col-md-5">

                        <a href="{{route('activity.gallery',['id'=>$activity->id])}}">
                            <div id="ourCarousel" class="carousel slide" data-ride="carousel">

                                <!--Carousel indicators-->
                                <ol class="carousel-indicators">
                                    <?php  $i = 0 ?>

                                    @foreach($photos as $photo)
                                        @if($i == 0)
                                            <li data-target="#ourCarousel" data-slide-to="{{$i}}" class="active"></li>
                                        @else
                                            <li data-target="#ourCarousel" data-slide-to="{{$i}}"></li>
                                        @endif
                                        <?php $i++ ?>
                                    @endforeach
                                </ol>
                                <!--Carousel items-->
                                <div class="carousel-inner" style=" width:100%; height: 40rem;">

                                    <?php $y = 0 ?>
                                    <div class="item active">
                                        <img src="{{$Firstphoto->pathPhoto}}" width="100%">
                                    </div>
                                    @foreach($photos as $photo)
                                        @if($y == 0)

                                        @else
                                            <div class="item">
                                                <img src="{{$photo->pathPhoto}}" width="100%">
                                            </div>
                                        @endif
                                        <?php $y++ ?>
                                    @endforeach

                                </div>

                                <!--Carousel navigation-->
                                <a class="carousel-control left" href="#ourCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>

                                <a class="carousel-control right" href="#ourCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>

                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="line">
                <div id="inscription" class="col-md-offset-1 col-md-5">

                    @if(App\User_activite::where('id_activite', '=', $activity->id)->where('id_user', '=', auth::user()->id)->exists())
                        <a href="{{route('activity.unparticiper',['id'=>$activity->id])}}"
                           class="btn btn-primary pull-right" role="button">SE DÉSINSCRIRE</a>
                    @else
                        <a href="{{route('activity.participer',['id'=>$activity->id])}}"
                           class="btn btn-primary pull-right" role="button">S'INSCRIRE</a>
                    @endif

                </div>
                <div class="col-md-offset-1 col-md-3">
                    @if(auth::User()->id_statut === 2 || auth::User()->id_statut === 3)
                        <a href="{{route('activity.participants',['id'=>$activity->id])}}" class="btn btn-primary pull-right" role="button">VOIR PARTICIPANTS</a>
                    @endif</div>
            </div>
        </div>
    </div>
@endsection