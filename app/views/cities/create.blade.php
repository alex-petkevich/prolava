@extends('layouts.scaffold')

@section('main')

<div class="col-xs-4">
<h1>{{trans('cities.create_city')}}</h1>

{{ Form::open(array('route' => 'cities.store', 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('name')) has-error has-feedback @endif">
            {{ Form::label('name', trans('cities.name'), array('class' => 'control-label')) }}
            {{ Form::text('name',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
			{{ Form::submit(trans('cities.submit'), array('class' => 'btn btn-info')) }}
    </div>
{{ Form::close() }}
</div>
{{-- @if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif --}}

@stop


