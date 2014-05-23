@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.edit_role') }}</h1>
{{ Form::model($role, array('method' => 'PATCH', 'route' => array('roles.update', $role->id))) }}
	<ul>
        <li>
            {{ Form::label('role', trans('offers.role')) }}
            {{ Form::text('role') }}
        </li>

		<li>
			{{ Form::submit(trans('offers.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('roles.show', trans('offers.cancel'), $role->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
