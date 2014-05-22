@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.create_city')}}</h1>

{{ Form::open(array('route' => 'cities.store')) }}
	<ul>
        <li>
            {{ Form::label('name', trans('cities.name')) }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit(trans('cities.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


