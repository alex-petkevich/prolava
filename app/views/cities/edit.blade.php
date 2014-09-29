@extends('layouts.backend')

@section('main')

<div class="col-xs-4">
<h1>{{trans('cities.edit_city')}}</h1>
{{ Form::model($city, array('method' => 'PATCH', 'route' => array('cities.update', $city->id))) }}
    <div class="form-group @if ($errors->has('name')) has-error has-feedback @endif">
            {{ Form::label('name', trans('cities.name'), array('class' => 'control-label')) }}
            {{ Form::text('name',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
			{{ Form::submit(trans('cities.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('cities.show', trans('cities.cancel'), $city->id, array('class' => 'btn')) }}
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
