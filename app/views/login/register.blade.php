@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('login.register') }}</h1>

<p>{{ link_to_route('login.index', trans('login.login')) }}</p>

{{ Form::open(array('route' => 'login.register')) }}
<ul>
   <li>
      {{ Form::label('email', trans('login.email')) }}
      {{ Form::text('email') }}
   </li>

   <li>
      {{ Form::label('username', trans('login.username')) }}
      {{ Form::text('username') }}
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

@include('partials.errors', $errors)

@stop