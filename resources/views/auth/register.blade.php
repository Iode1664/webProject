@extends('Identification-template')
@section('title')
    Enregistrement
    @endsection
@section('contenu')
<div class="container">
    <div class="row">
        <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Enregistrement</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmer Mot de Passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('promo') ? ' has-error' : '' }}">
                            <label for="promo" class="col-md-4 control-label">De quelle promo viens-tu?</label>

                            <div class="col-md-6">
                                <input id="exia" type="radio" class="form-checkinput" name="promo" value="exia" required><label for="exia">Exia</label><br />
                                <input id="ei" type="radio" class="form-checkinput" name="promo" value="ei" required><label for="ei">EI</label><br />

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
                                <div class="col-md-6">
                                    <input id="photo1" type="radio" class="form-checkinput" name="avatar"
                                           value="/../webProject/public/avatar/alonso.jpg" required><label
                                            for="photo1"><img
                                                src="/../webProject/public/avatar/alonso.jpg" class="alonso"></label>
                                </div>
                                <div class="col-md-3 ">
                                    <input id="photo4" type="radio" class="form-checkinput" name="avatar"
                                           value="/../webProject/public/avatar/deadpool.png" required><label
                                            for="photo4"><img
                                                src="/../webProject/public/avatar/deadpool.png"></label>
                                </div>
                                <div class="col-md-4 ">
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
                            <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Enregistrement
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br>
</div>
@endsection
