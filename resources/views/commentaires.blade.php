@extends('Classique-template')

@section('title')
    bde cesi
@endsection

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{$photo->imagePath ()}}">
            </div>
        </div>
    </div>
</div>






@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <div class="panel panel-default">
                    <div class="panel-heading">ECRIRE UN COMMENTAIRE</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('commentaire.store', ['idp'=> ]) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Commentaire</label>

                                <div class="col-md-6">
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
                                <div class="col-md-8 col-md-offset-4">
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
    </div>
@endsection