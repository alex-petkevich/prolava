@extends('layouts.scaffold')

@section('main')

<h1>{{trans('companies.edit_company')}}</h1>
{{ Form::model($company, array('method' => 'PATCH', 'route' => array('companies.update', $company->id))) }}
	<ul>
        <li>
            {{ Form::label('title', trans('companies.title')) }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit(trans('companies.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('companies.show', trans('companies.cancel'), $company->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
