@extends('Classique-template')

@section('title')
    Ajout
@endsection


@section('contenu')

    @if(auth::User()->id_statut == 1)
        <br> <br> <br> <br>
        <div class="col-md-12">
            <a id="erreur" href="{{url('/home')}}"><strong>ERREUR</strong></a>
        </div>
        <br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br>
    @else


        <div class="container">
            @if(auth::User()->id_statut == 2 || 3)
                <div class="row">
                    <div class="col-md-5">
                        <br><br>
                        <div class="panel panel-default">
                            <div class="panel-heading">AJOUT ACTIVITÉ</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('activites.store') }}" enctype="multipart/form-data">
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
                                            <input id="date_debut" type="datetime-local" class="form-control"
                                                   name="date_debut" required>

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
                                            <input id="date_fin" type="datetime-local" class="form-control"
                                                   name="date_fin"
                                                   required>

                                            @if ($errors->has('date_fin'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('date_fin') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                                        <label for="lieu" class="col-md-4 control-label">Adresse</label>

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
                                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
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
                                        <label for="description" class="col-md-4 control-label">Description</label>

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
                    <br><br>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">ACTIVITÉ À VOTER</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('activites.vote') }}" enctype="multipart/form-data">
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

                                    <div class="form-group{{ $errors->has('lieu') ? ' has-error' : '' }}">
                                        <label for="lieu" class="col-md-4 control-label">Adresse</label>

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
                                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
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
                                        <label for="description" class="col-md-4 control-label">Description</label>

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
                                    <br>

                                    <label>Première Proposition :</label>
                                    <div class="form-group{{ $errors->has('date_debut') ? ' has-error' : '' }}">
                                        <label for="date_debut" class="col-md-4 control-label">Date de début</label>

                                        <div class="col-md-6">
                                            <input id="date_debut" type="datetime-local" class="form-control"
                                                   name="date_debut" required>

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
                                            <input id="date_fin" type="datetime-local" class="form-control"
                                                   name="date_fin"
                                                   required>

                                            @if ($errors->has('date_fin'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('date_fin') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>

                                    <label>Deuxième Proposition :</label>
                                    <div class="form-group{{ $errors->has('date_debut2') ? ' has-error' : '' }}">
                                        <label for="date_debut2" class="col-md-4 control-label">Date de début</label>

                                        <div class="col-md-6">
                                            <input id="date_debut2" type="datetime-local" class="form-control"
                                                   name="date_debut2" required>

                                            @if ($errors->has('date_debut2'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('date_debut2') }}</strong>
                                                     </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('date_fin2') ? ' has-error' : '' }}">
                                        <label for="date_fin2" class="col-md-4 control-label">Date de fin</label>

                                        <div class="col-md-6">
                                            <input id="date_fin2" type="datetime-local" class="form-control"
                                                   name="date_fin2"
                                                   required>

                                            @if ($errors->has('date_fin2'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('date_fin2') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>

                                    <label>Troisième Proposition :</label>
                                    <div class="form-group{{ $errors->has('date_debut3') ? ' has-error' : '' }}">
                                        <label for="date_debut3" class="col-md-4 control-label">Date de début</label>

                                        <div class="col-md-6">
                                            <input id="date_debut3" type="datetime-local" class="form-control"
                                                   name="date_debut3" required>

                                            @if ($errors->has('date_debut3'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('date_debut3') }}</strong>
                                                     </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('date_fin3') ? ' has-error' : '' }}">
                                        <label for="date_fin3" class="col-md-4 control-label">Date de fin</label>

                                        <div class="col-md-6">
                                            <input id="date_fin3" type="datetime-local" class="form-control"
                                                   name="date_fin3"
                                                   required>

                                            @if ($errors->has('date_fin3'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('date_fin3') }}</strong>
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
            @endif
        </div>

        <br><br><br>
        <div class="container">
            @if(auth::User()->id_statut == 3)
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">AJOUT ARTICLE</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('product.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                        <label for="nom" class="col-md-4 control-label">Article</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text" class="form-control" name="nom"
                                                   value="{{ old('nom') }}" required autofocus>

                                            @if ($errors->has('nom'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('prix') ? ' has-error' : '' }}">
                                        <label for="prix" class="col-md-4 control-label">Prix</label>

                                        <div class="col-md-6">
                                            <input id="prix" type="text" class="form-control" name="prix"
                                                   value="{{ old('prix') }}" required autofocus>

                                            @if ($errors->has('prix'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('prix') }}</strong>
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

                                    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                        <label for="photo" class="col-md-4 control-label">Image</label>

                                        <div class="col-md-6">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
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


                    <div class="col-md-5 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">AJOUT MEMBRE BDE</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('ajout-membre') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                        <label for="nom" class="col-md-4 control-label">Nom</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text" class="form-control" name="nom"
                                                   value="{{ old('nom') }}" required autofocus>

                                            @if ($errors->has('nom'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                        <label for="prenom" class="col-md-4 control-label">Prenom</label>

                                        <div class="col-md-6">
                                            <input id="prenom" type="text" class="form-control" name="prenom"
                                                   value="{{ old('prenom') }}" required autofocus>

                                            @if ($errors->has('prenom'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Mot de passe</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password"
                                                   required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirmer Mot de
                                            Passe</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required>
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('promo') ? ' has-error' : '' }}">
                                        <label for="promo" class="col-md-4 control-label">De quelle promo
                                            viens-tu?</label>

                                        <div class="col-md-6">
                                            <input id="exia" type="radio" class="form-checkinput" name="promo"
                                                   value="exia" required><label for="exia">Exia</label><br/>
                                            <input id="ei" type="radio" class="form-checkinput" name="promo" value="ei"
                                                   required><label for="ei">EI</label><br/>

                                            @if ($errors->has('promo'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('promo') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                        <label for="avatar" class="col-md-4 control-label">Choisi ton avatar</label>

                                        <div class="col-md-6">
                                            <div class="col-md-5 ">
                                                <input id="photo1" type="radio" class="form-checkinput" name="avatar"
                                                       value="/../webProject/public/avatar/alonso.jpg" required><label
                                                        for="photo1"><img
                                                            src="/../webProject/public/avatar/alonso.jpg"></label>
                                            </div>
                                            <div class="col-md-5 col-md-offset-2">
                                                <input id="photo4" type="radio" class="form-checkinput" name="avatar"
                                                       value="/../webProject/public/avatar/deadpool.png" required><label
                                                        for="photo4"><img
                                                            src="/../webProject/public/avatar/deadpool.png"></label>
                                            </div>
                                            <div class="col-md-5 ">
                                                <input id="photo2" type="radio" class="form-checkinput" name="avatar"
                                                       value="/../webProject/public/avatar/lion.png" required><label
                                                        for="photo2"><img
                                                            src="/../webProject/public/avatar/lion.png"></label>
                                            </div>
                                            <div class="col-md-5 col-md-offset-2">
                                                <input id="photo3" type="radio" class="form-checkinput" name="avatar"
                                                       value="/../webProject/public/avatar/batman.png" required><label
                                                        for="photo3"><img
                                                            src="/../webProject/public/avatar/batman.png"></label>
                                            </div>
                                        </div>

                                            @if ($errors->has('promo'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('promo') }}</strong>
                                    </span>
                                            @endif

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Enregistrement
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
        </div>
        <br><br>

    @endif
@endsection
