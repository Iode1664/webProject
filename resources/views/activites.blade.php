@extends('Classique-template')

@section('title')
	bde cesi
@endsection

@section('custom_css')
	@if(auth::User()->promo === 'Exia')
		<link rel="stylesheet" href="../../webProject/public/css/style-Exia.css">
	@else
		<link rel="stylesheet" href="../../webProject/public/css/style-Ei.css">
	@endif
@endsection

@section('logo')
	@if(auth::User()->promo === 'Exia')
		<img src="../../webProject/public/images/logoExia.jpg">
	@else
		<img src="../../webProject/public/images/logoEi.jpg">
	@endif
@endsection

@section('contenu')






















	<div class="container">
		<div class="row">
			<div class="col-md-5 ">
				<div class="panel panel-default">
					<div class="panel-heading">SUGGESTION ACTIVITÉ</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST" action="{{ route('activites.stores') }}" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('activite') ? ' has-error' : '' }}">
								<label for="activite" class="col-md-4 control-label">Activité</label>

								<div class="col-md-6">
									<input id="activite" type="text" class="form-control" name="activite" value="{{ old('activite') }}" required autofocus>

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
									<input id="date_debut" type="datetime-local" class="form-control" name="date_debut" required>

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
									<input id="date_fin" type="datetime-local" class="form-control" name="date_fin" required>

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
									<input id="lieu" type="text" class="form-control" name="lieu" value="{{ old('lieu') }}" required autofocus>

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
									<input type="hidden" name="MAX_FILE_SIZE" value="12345" />
									<input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>

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
									<textarea name="description" class="form-control" id="description" rows="10" cols="50"></textarea>

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
