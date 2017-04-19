@extends('Classique-template')

@section('title')
    bde cesi
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
                                    <a href="{{route('activity.show',['id'=>$activity->id])}}"
                                       class="btn btn-primary pull-right" role="button">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="nav_btns">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-5" id="activity_title">
                <h2>VOTES</h2>
            </div>
        </div>
        @foreach($votes->chunk(2) as $voteschunk)
            <br><br>
            <div class="row">
                <div class="line">
                    {{--<div class="col-md-1"></div>--}}
                    @foreach($voteschunk as $vote)
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <div class="wrapper">
                                    <img class="slide" src="{{$vote->photo}}">
                                    <div class="caption">

                                        <h3>&nbsp; {{$vote->nom}}</h3>
                                        <br>
                                        <p class="desc">{{$vote->description}}</p>
                                        <br>
                                    </div>


                                    @if(App\Vote::whereIn('id_horaire', App\Horaire::select('id')->where('id_activite', "=", $vote->id)->get())->where('id_user', '=', auth::user()->id)->exists())
                                        <a href="{{route('activites.unvote', ['id'=>$vote->id])}}"
                                           class="btn btn-primary pull-right" role="button">ANNULER VOTE</a>
                                    @else
                                        <form action="{{route('activites.vote')}}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <select name="plage_horaire">
                                                @foreach(App\Horaire::where('id_activite', "=", $vote->id)->get() as $hor)
                                                    <option value="{{$hor->id}}">{{date("d/m/y H:i", strtotime($hor->Debut))}}
                                                        &nbsp; - &nbsp; {{date("d/m/y H:i", strtotime($hor->Fin))}}</option>
                                                @endforeach
                                            </select>
                                            <input type="submit" value="VOTER" id="vote"/>
                                        </form>
                                    @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <div class="panel panel-default">
                    <div class="panel-heading">SUGGESTION ACTIVITÉ</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('activites.stores') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('activite') ? ' has-error' : '' }}">
                                <label for="activite" class="col-md-4 control-label">Activité</label>

                                <div class="col-md-6">
                                    <input id="activite" type="text" class="form-control" name="activite"
                                           value="{{ old('activite') }}" required autofocus>

                                    @if ($errors->has('activite'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('activite') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date_debut') ? ' has-error' : '' }}">
                                <label for="date_debut" class="col-md-4 control-label">Date de début</label>

                                <div class="col-md-6">
                                    <input id="date_debut" type="datetime-local" class="form-control" name="date_debut"
                                           required>

                                    @if ($errors->has('date_debut'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date_debut') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date_fin') ? ' has-error' : '' }}">
                                <label for="date_fin" class="col-md-4 control-label">Date de fin</label>

                                <div class="col-md-6">
                                    <input id="date_fin" type="datetime-local" class="form-control" name="date_fin"
                                           required>

                                    @if ($errors->has('date_fin'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date_fin') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                                <label for="lieu" class="col-md-4 control-label">Lieu</label>

                                <div class="col-md-6">
                                    <input id="lieu" type="text" class="form-control" name="lieu"
                                           value="{{ old('lieu') }}" required autofocus>

                                    @if ($errors->has('lieu'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lieu') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label for="photo" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="12345"/>
                                    <input id="photo" type="file" class="form-control" name="photo"
                                           value="{{ old('photo') }}" required autofocus>

                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="lieu" class="col-md-4 control-label">Description</label>

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
                                        Envoyer
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