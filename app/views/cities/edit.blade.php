@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.edit_city')}}</h1>
{{ Form::model($city, array('method' => 'PATCH', 'route' => array('cities.update', $city->id))) }}
	<ul>
        <li>
            {{ Form::label('name', trans('cities.name')) }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit(trans('cities.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('cities.show', trans('cities.cancel'), $city->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
