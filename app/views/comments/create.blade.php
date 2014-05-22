@extends('layouts.scaffold')

@section('main')

<h1>{{trans('comments.create_comment')}}</h1>

{{ Form::open(array('route' => 'comments.store')) }}
	<ul>
        <li>
            {{ Form::label('body', trans('comments.body')) }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('user_id', trans('comments.user_id')) }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('offer_id', trans('comments.offer_id')) }}
            {{ Form::input('number', 'offer_id') }}
        </li>

        <li>
            {{ Form::label('mark', trans('comments.mark')) }}
            {{ Form::input('number', 'mark') }}
        </li>

		<li>
			{{ Form::submit(trans('comments.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


