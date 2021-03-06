@extends('Classique-template')

@section('title')
    Galerie {{$activity->nom}}
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-gallery.css">
@endsection


@section('contenu')
    <div class="container-fluid">

        @foreach($photos->chunk(3) as $photoChunck)
            <br><br>
            <div class="row">
                <div class="line">
                    @foreach($photoChunck as $photo)
                        <div class="col-sm-6 col-md-4 photo">
                            <a href="{{route('commentaire.index',['id'=>$photo->id])}}">
                                <img src="{{$photo->pathPhoto}}">
                            </a>
                            @if(Auth::User()->id_statut == 3)
                            <div class="col-md-4 col-md-offset-2 "><br>
                                <a href="{{$photo->pathPhoto}}" download="{{$photo->pathPhoto}}" style="margin-top: 1rem;"><input type="button" class="btn btn-success" value="Télécharger"></a>
                            </div>
                            <div class="col-md-4 "><br>
                                <a href="{{route('photo.supprimer',['id'=>$photo->id])}}" class="btn btn-danger " role="button">Supprimer</a>
                            </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach


        <br><br>

        <div class="col-md-4 col-md-offset-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">AJOUTER UNE PHOTO</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ route('photo.store', ['id'=>$activity->id]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-2 control-label">Image</label>

                            <div class="col-md-7">
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000000"/>
                                <input id="photo" type="file" class="form-control" name="photo"
                                       value="{{ old('photo') }}" required autofocus>

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-7">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection