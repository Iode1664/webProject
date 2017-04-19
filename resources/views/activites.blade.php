@extends('Classique-template')

@section('title')
    Activités
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-activitys.css">
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="nav_btns">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-5" id="activity_title">
                <h2>ACTIVITÉS</h2>
            </div>
        </div>
        @foreach($activitys->chunk(2) as $activitysChunk)
            <br><br>
            <div class="row">
                <div class="line">
                    {{--<div class="col-md-1"></div>--}}
                    @foreach($activitysChunk as $activity)
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <div class="wrapper">
                                    <img class="slide" src="{{$activity->photo}}">
                                    <div class="caption">

                                        <h3>&nbsp; {{$activity->nom}}</h3>
                                        <br>
                                        <p class="desc">{{$activity->description}}</p>
                                        <br>
                                    </div>
                                    <a href="{{route('activity.show',['id'=>$activity->id])}}" class="btn btn-primary pull-right" role="button">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection