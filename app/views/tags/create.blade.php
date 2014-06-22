@extends('layouts.scaffold')

@section('main')

<div class="col-xs-4">
<h1>{{ trans('tags.create_tag') }}</h1>

{{ Form::open(array('route' => 'tags.store', 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">
            {{ Form::label('title', trans('tags.title'), array('class' => 'control-label')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
			{{ Form::submit(trans('tags.submit'), array('class' => 'btn btn-info')) }}
    </div>
{{ Form::close() }}

{{-- @if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif --}}
</div>
@stop


