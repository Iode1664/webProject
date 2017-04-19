@extends('Classique-template')

@section('title')
    Galerie {{$activity->nom}}
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-gallery.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection


@section('contenu')

    @foreach($photos->chunk(3) as $photoChunck)
        <br><br>
        <div class="row">
            <div class="line">
                @foreach($photoChunck as $photo)

                    <div class="col-sm-6 col-md-4 photo">
                        <a href="{{route('commentaire.index',['idp'=>$photo->id])}}">
                        <img src="{{$photo->pathPhoto}}">
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    @endforeach
    <br><br>
@endsection