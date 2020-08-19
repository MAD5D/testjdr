<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Création de personnage</title>
</head>
<body>

	Creation de personnage
	@if(Auth::check())
		{!! Form::open(['route' => 'personnage.store']) !!}
			{!! Form::label('pseudo','Pseudo :') !!}
			{!! Form::text('pseudo',null) !!}<br />

			{!! Form::label('homme','Homme :') !!}
				{!! Form::radio('sexe','1',false,['id' => 'homme']) !!}
			{!! Form::label('femme','Femme :') !!}
				{!! Form::radio('sexe','0',false,['id' => 'femme']) !!}<br />
			{!! Form::submit('Créer le personnage') !!}
		{!! Form::close() !!}
	@else
		"ok"
	@endif
</body>
</html>
