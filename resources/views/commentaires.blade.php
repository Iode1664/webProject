{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('timestamps', 'Timestamps:') !!}
			{!! Form::text('timestamps') !!}
		</li>
		<li>
			{!! Form::label('texte', 'Texte:') !!}
			{!! Form::text('texte') !!}
		</li>
		<li>
			{!! Form::label('id_user', 'Id_user:') !!}
			{!! Form::text('id_user') !!}
		</li>
		<li>
			{!! Form::label('id_photo', 'Id_photo:') !!}
			{!! Form::text('id_photo') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}