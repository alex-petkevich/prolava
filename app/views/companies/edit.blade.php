@extends('layouts.backend')

@section('main')

<div class="col-xs-4">
<h1>{{trans('companies.edit_company')}}</h1>
{{ Form::model($company, array('method' => 'PATCH', 'route' => array('companies.update', $company->id), 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">

        {{ Form::label('title', trans('companies.title'), array('class' => 'control-label')) }}
        {{ Form::text('title',null, array('class' => 'form-control')) }}
        @if ($errors->has('title')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
        </div>

    <div class="form-group">
			{{ Form::submit(trans('companies.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('companies.show', trans('companies.cancel'), $company->id, array('class' => 'btn btn-default')) }}
		</div>
{{ Form::close() }}

    </div>

{{-- @if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif --}}

@stop
