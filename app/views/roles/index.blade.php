@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.all_roles') }}</h1>

<p>{{ link_to_route('roles.create', trans('offers.add_new_role')) }}</p>

@if ($roles->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans('offers.role_') }}</th>
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
{{ trans('offers.no_roles') }}
@endif

@stop
