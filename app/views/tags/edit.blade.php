@extends('layouts.backend')

@section('main')
<div class="col-xs-4">
<h1>{{ trans('tags.edit_tag') }} </h1>
{{ Form::model($tag, array('method' => 'PATCH', 'route' => array('tags.update', $tag->id), 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">
            {{ Form::label('title', trans('tags.title'), array('class' => 'control-label')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
			{{ Form::submit(trans('tags.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('tags.show', trans('tags.cancel'), $tag->id, array('class' => 'btn btn-default')) }}
    </div>
{{ Form::close() }}

{{-- @if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif --}}
</div>
@stop
