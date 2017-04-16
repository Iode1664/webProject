{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Debut', 'Debut:') !!}
			{!! Form::text('Debut') !!}
		</li>
		<li>
			{!! Form::label('Fin', 'Fin:') !!}
			{!! Form::text('Fin') !!}
		</li>
		<li>
			{!! Form::label('id_activite', 'Id_activite:') !!}
			{!! Form::text('id_activite') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}