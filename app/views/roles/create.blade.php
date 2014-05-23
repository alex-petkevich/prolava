@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.create_role') }}</h1>

{{ Form::open(array('route' => 'roles.store')) }}
	<ul>
        <li>
            {{ Form::label('role', trans('offers.create_role')) }}
            {{ Form::text('role') }}
        </li>

		<li>
			{{ Form::submit(trans('offers.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


