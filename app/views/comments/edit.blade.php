@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.edit_comment')}}</h1>
{{ Form::model($comment, array('method' => 'PATCH', 'route' => array('comments.update', $comment->id))) }}
	<ul>
        <li>
            {{ Form::label('body', trans('cities.body')) }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('user_id', trans('cities.user_id')) }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('offer_id', trans('cities.offer_id')) }}
            {{ Form::input('number', 'offer_id') }}
        </li>

        <li>
            {{ Form::label('mark', trans('cities.mark')) }}
            {{ Form::input('number', 'mark') }}
        </li>

		<li>
			{{ Form::submit(trans('cities.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('comments.show', trans('cities.cancel'), $comment->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
