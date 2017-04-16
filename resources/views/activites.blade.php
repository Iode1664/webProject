{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('date_debut', 'Date_debut:') !!}
			{!! Form::text('date_debut') !!}
		</li>
		<li>
			{!! Form::label('date_fin', 'Date_fin:') !!}
			{!! Form::text('date_fin') !!}
		</li>
		<li>
			{!! Form::label('id_statut', 'Id_statut:') !!}
			{!! Form::text('id_statut') !!}
		</li>
		<li>
			{!! Form::label('lieu', 'Lieu:') !!}
			{!! Form::text('lieu') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}