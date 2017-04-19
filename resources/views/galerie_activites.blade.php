@extends('Classique-template')

@section('title')
***    Galerie {{$activite->nom}}{{--Nom de l'activité qui correspond au bouton sur lequel on appuie--}}
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-galerie.css">
@endsection

@section('contenu')
    @foreach($activites->chunk(3) as $activiteChunck)
        <br><br>
        <div class="row">
            <div class="line">
                @foreach($activiteChunck as $activite)

                    <div class="col-sm-6 col-md-4">

                            <img src="{{$activite->imagePath}}" alt="...">
                    </div>

                @endforeach
            </div>
        </div>

    @endforeach
@endsection