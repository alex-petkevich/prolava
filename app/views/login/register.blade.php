@extends('layouts.scaffold')

@section('main')
<div class="col-xs-5">
<h1>{{ trans('login.register') }}</h1>

<p>{{ link_to_route('login.index', trans('login.login')) }}</p>

{{ Form::open(array('route' => 'login.register', 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('email')) has-error has-feedback @endif">
      {{ Form::label('email', trans('login.email'), array('class' => 'control-label')) }}
      {{ Form::text('email',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('username')) has-error has-feedback @endif">
      {{ Form::label('username', trans('login.username'), array('class' => 'control-label')) }}
      {{ Form::text('username',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('password')) has-error has-feedback @endif">
      {{ Form::label('password', trans('login.password'), array('class' => 'control-label')) }}
      {{ Form::password('password',array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::submit(trans('login.submit'), array('class' => 'btn btn-info')) }}
    </div>
{{ Form::close() }}
  </div>
       
       {{--
@include('partials.errors', $errors)
--}}
@stop