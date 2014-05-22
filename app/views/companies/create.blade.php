@extends('layouts.scaffold')

@section('main')

<h1>{{trans('companies.create_company')}}</h1>

{{ Form::open(array('route' => 'companies.store')) }}
	<ul>
        <li>
            {{ Form::label('title', trans('companies.title')) }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit(trans('companies.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


