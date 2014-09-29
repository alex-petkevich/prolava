@extends('layouts.backend')

@section('main')
<div class="col-xs-4">
<h1>{{ trans('roles.create_role') }}</h1>

{{ Form::open(array('route' => 'roles.store', 'role' => 'form')) }}
        <div class="form-group @if ($errors->has('role')) has-error has-feedback @endif">
            {{ Form::label('title', trans('tags.title'), array('class' => 'control-label')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
			{{ Form::submit(trans('roles.submit'), array('class' => 'btn btn-info')) }}
        </div>
{{ Form::close() }}
</div>
{{--
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
--}}
@stop


