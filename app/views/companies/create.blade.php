@extends('layouts.backend')

@section('main')

<h1>{{trans('companies.create_company')}}</h1>

<div class="col-xs-4">
{{ Form::open(array('route' => 'companies.store', 'role' => 'form')) }}
<div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">
            {{ Form::label('title', trans('companies.title'), array('class' => 'control-label')) }}
            {{ Form::text('title','', array('class' => 'form-control')) }}
            @if ($errors->has('title')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
        </div>

<div class="form-group">
			{{ Form::submit(trans('companies.submit'), array('class' => 'btn btn-info')) }}
		</div>
{{ Form::close() }}
</div>
{{-- @if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif --}}

@stop


