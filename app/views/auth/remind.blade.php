@extends('layouts.scaffold')

@section('main')
<div class="col-xs-4">

<h1>{{{ trans('auth.forgot_password') }}}</h1>

    @if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
    @elseif (Session::has('status'))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
    @endif
    
<p>{{ link_to_route('login.index', trans('auth.no')) }}</p>

    
{{ Form::open(array('route' => 'password.remind','role' => 'form')) }}
    <div class="form-group">
      {{ Form::label('email', trans('auth.your_email'), array('class' => 'control-label'))}}
      {{ Form::email('email',null, array('class' => 'form-control')) }}
   </div>

    <div class="form-group">
      {{ Form::submit(trans('auth.send_reminder'), array('class' => 'btn btn-info')) }}
   </div>
{{ Form::close() }}
</div>
@stop