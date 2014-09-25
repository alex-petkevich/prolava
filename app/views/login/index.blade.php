@extends('layouts.scaffold')

@section('main')

<h1>{{{ trans('login.login') }}}</h1>

<div class="col-xs-4">
{{ Form::open(array('route' => 'login.index', 'role' => 'form')) }}
<div class="form-group">
      {{ Form::label('email', trans('login.email_or_username')) }}
      {{ Form::text('email','', array('class' => 'form-control')) }}
   </div>

<div class="form-group">
      {{ Form::label('password', trans('login.password')) }}
      {{ Form::password('password', array('class' => 'form-control')) }}
</div>

    <div class="form-group">
      {{ Form::submit(trans('login.submit'), array('class' => 'btn btn-info')) }}
    </div>
{{ Form::close() }}

<p>{{ link_to_route('password.remind',  trans('login.forgot_password')) }}</p>

@include('partials.errors', $errors)

</div>

@stop