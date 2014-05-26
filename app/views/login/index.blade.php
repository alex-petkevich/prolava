@extends('layouts.scaffold')

@section('main')

<h1>{{{ trans('login.login') }}}</h1>

<p>{{ link_to_route('login.register', trans('login.register')) }}</p>

{{ Form::open(array('route' => 'login.index')) }}
<ul>
   <li>
      {{ Form::label('email', trans('login.email_or_username')) }}
      {{ Form::text('email') }}
   </li>

   <li>
      {{ Form::label('password', trans('login.password')) }}
      {{ Form::password('password') }}
   </li>

   <li>
      {{ Form::submit(trans('login.submit'), array('class' => 'btn btn-info')) }}
   </li>
</ul>
{{ Form::close() }}

<p>{{ link_to_route('password.remind',  trans('login.forgot_password')) }}</p>

@include('partials.errors', $errors)

@stop