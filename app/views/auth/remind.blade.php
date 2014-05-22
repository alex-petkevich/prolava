@extends('layouts.scaffold')

@section('main')

@if (Session::has('error'))
<div class="alert alert-error">
   {{ trans(Session::get('reason')) }}
</div>
@elseif (Session::has('success'))
<div class="alert alert-success">
   {{{ trans('auth.emails_has_sent') }}}
</div>
@endif

<h1>{{{ trans('auth.forgot_password') }}}</h1>

<p>{{ link_to_route('login.index', trans('auth.no')) }}</p>

{{ Form::open() }}
<ul>
   <li>
      {{ Form::label('email', trans('auth.your_email'))}}
      {{ Form::email('email') }}
   </li>

   <li>
      {{ Form::submit(trans('auth.send_reminder'), array('class' => 'btn')) }}
   </li>
</ul>
{{ Form::close() }}

@stop