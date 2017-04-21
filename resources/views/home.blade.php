@extends('Classique-template')

@section('title')
    Accueil
@endsection

@section('custom_css')

    <link rel="stylesheet" href="/../webProject/public/css/style-acceuil.css">
    <link rel="stylesheet" href="/../webProject/public/css/style-activitys.css">
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-12 titreacc">
                <h1>BIENVENUE SUR LE SITE DU BDE CESI BORDEAUX</h1>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12 imgacc">
                <img src="/../webProject/public/images/acceuilvignette.png">
            </div>
        </div>
        <div class="row">
            <div class="line">
                <div class="col-md-6">
                    <h2>La plus populaire</h2>
                    <div class="thumbnail">
                        <div class="wrapper">
                            <img class="slide" src="{{$most_popular->photo}}">
                            <div class="caption">

                                <h3>&nbsp; {{$most_popular->nom}}</h3>
                                <br>
                                <p class="desc">{{$most_popular->description}}</p>
                                <br>
                            </div>
                            <a href="{{route('activity.show',['id'=>$most_popular->id])}}"
                               class="btn btn-primary pull-right" role="button">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="line">
                <div class="col-md-6">
                    <h2>Activité à venir</h2>
                    <div class="thumbnail">
                        <div class="wrapper">
                            <img class="slide" src="{{$incomming->photo}}">
                            <div class="caption">

                                <h3>&nbsp; {{$incomming->nom}}</h3>
                                <br>
                                <p class="desc">{{$incomming->description}}</p>
                                <br>
                            </div>
                            <a href="{{route('activity.show',['id'=>$incomming->id])}}"
                               class="btn btn-primary pull-right" role="button">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="row">
            <div class="line">
                <div class="col-md-offset-3 col-md-6">
                    <h2>Vote du moment</h2>
                    <div class="thumbnail">
                        <div class="wrapper">
                            <img class="slide" src="{{$latest_vote->photo}}">
                            <div class="caption">

                                <h3>&nbsp; {{$latest_vote->nom}}</h3>
                                <br>
                                <p class="desc">{{$latest_vote->description}}</p>
                                <br>
                            </div>
                            <a href="{{route('activity.show',['id'=>$latest_vote->id])}}"
                               class="btn btn-primary pull-right" role="button">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        </div>
        <br> <br> <br> <br>


    </div>
@endsection
