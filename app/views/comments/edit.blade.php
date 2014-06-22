@extends('layouts.scaffold')

@section('main')
<div class="col-xs-5">

<h1>{{trans('comments.edit_comment')}}</h1>
{{ Form::model($comment, array('method' => 'PATCH', 'route' => array('comments.update', $comment->id), 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('body')) has-error has-feedback @endif">
            {{ Form::label('body', trans('comments.body'), array('class' => 'control-label')) }}
            {{ Form::textarea('body',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('user_id')) has-error has-feedback @endif">
            {{ Form::label('user_id', trans('comments.user_id'), array('class' => 'control-label')) }}
            {{ Form::input('number', 'user_id',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('offer_id')) has-error has-feedback @endif">
            {{ Form::label('offer_id', trans('comments.offer_id'), array('class' => 'control-label')) }}
            {{ Form::input('number', 'offer_id',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('mark')) has-error has-feedback @endif">
            {{ Form::label('mark', trans('comments.mark'), array('class' => 'control-label')) }}
            {{ Form::input('number', 'mark',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
			{{ Form::submit(trans('comments.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('comments.show', trans('comments.cancel'), $comment->id, array('class' => 'btn btn-default')) }}
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
