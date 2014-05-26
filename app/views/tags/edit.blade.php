@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('tags.edit_tag') }} </h1>
{{ Form::model($tag, array('method' => 'PATCH', 'route' => array('tags.update', $tag->id))) }}
	<ul>
        <li>
            {{ Form::label('title', trans('tags.title')) }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit(trans('tags.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('tags.show', trans('tags.cancel'), $tag->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
