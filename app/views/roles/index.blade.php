@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('roles.all_roles') }}</h1>

<p>{{ link_to_route('roles.create', trans('roles.add_new_role')) }}</p>

@if ($roles->count())
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>{{ trans('roles.role_') }}</th>
                <th></th>
                <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($roles as $role)
				<tr>
					<td>{{{ $role->role }}}</td>
                    <td>{{ link_to_route('roles.edit', trans('offers.edit'), array($role->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('roles.destroy', $role->id))) }}
                            {{ Form::submit(trans('offers.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
{{ trans('roles.no_roles') }}
@endif

@stop
