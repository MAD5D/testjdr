@extends('template_accueil')

@section('formulaire_connexion')
	{!! Form::open(['url' => '/login']) !!}<br />
		{!! Form::label('email','email : ') !!}
		<!-- {!! $errors->has('mail') ? 'has-error' : '' !!}-->
		<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
			{!! Form::text('mail', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
			{!! $errors->first('mail','<small class="help-block">:message</small>') !!}
		</div>
		<div class="form-group {!! $errors->has('mot_de_passe') ? 'has-error' : '' !!}">
			{!! Form::label('mot_de_passe','Mot de passe : ') !!}
			{!! $errors->first('mot_de_passe','<small class="help-block">:message</small>') !!}
		</div>
		{!! Form::password('password') !!}<br />
		{!! Form::submit('Connexion') !!}
	{!! Form::close() !!}
@endsection

@section('formulaire_inscription')
	{!! Form::open(['url' => '/utilisateur']) !!}
		{!! Form::label('pseudo','Pseudo :') !!}
		{!! Form::text('pseudo') !!}<br />
		{!! Form::label('mot_de_passe','Mot de passe : ') !!}
		{!! Form::password('mot_de_passe') !!}<br />
		{!! Form::label('mot_de_passe_confirmation','Mot de passe (confirmation) :') !!}
		{!! Form::password('mot_de_passe_confirmation') !!}<br />
		{!! Form::label('mail','Mail :') !!}
		{!! Form::email('mail'); !!}<br />
		{!! Form::submit('Inscription') !!}
	{!! Form::close() !!}
@endsection
