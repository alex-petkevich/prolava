@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('tags.create_tag') }}</h1>

{{ Form::open(array('route' => 'tags.store')) }}
	<ul>
        <li>
            {{ Form::label('title', trans('tags.title')) }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit(trans('tags.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


