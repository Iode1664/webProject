@extends('Classique-template')

@section('title')
    bde cesi
@endsection

@section('custom_css')
    <link rel="stylesheet" href="/../webProject/public/css/style-gallery.css">
@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <br><br>
            <div class=" col-md-12  imgcomment">
                <img src="{{$photo->pathPhoto}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-1">
            @if(App\Jaime::where('id_photo', '=', $photo->id)->where('id_user', '=', auth::User()->id)->exists())
                <a href="{{route('jaime.unstore', ['id'=>$photo->id])}}"  role="button"><img src="/../webProject/public/images/coeur-rose.png">
                </a>
            @else
                <a href="{{route('jaime.store', ['id'=>$photo->id])}}"  role="button"><img src="/../webProject/public/images/coeur-noir.png">
                </a>
            @endif
            </div>
        </div>
        <br>

        
    @foreach($comments as $comment)

            <div class="row">
                <div class="col-md-1">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="{{$comment->avatar}}">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-1 -->
                <div class="row">
                    <br><br>

                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>{{$comment->prenom}} {{$comment->nom}}</strong> <span class="text-muted"></span>
                            </div>
                            <div class="panel-body justif">
                                {{$comment->texte}}
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->

                </div>
            </div>
            <br><br>
        @endforeach

        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">ECRIRE UN COMMENTAIRE</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('commentaire.store', ['id'=>$photo->id]) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-2 control-label">Commentaire</label>

                                <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="description" rows="10"
                                                  cols="50"></textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-9">
                                    <button type="submit" class="btn btn-primary">
                                        Poster
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <br><br>
    </div>
@endsection