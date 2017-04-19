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
                    <p>{{$activity->lieu}}</p>
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
                    <p>INSERER GOOGLE MAP</p>
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