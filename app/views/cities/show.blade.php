@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.show_city')}}</h1>

<p>{{ link_to_route('cities.index', trans('cities.return_all')) }}</p>

<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
			<th>{{trans('cities.name_head')}}</th>
            <th></th>
            <th></th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $city->name }}}</td>
                    <td>{{ link_to_route('cities.edit', trans('cities.edit'), array($city->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('cities.destroy', $city->id))) }}
                            {{ Form::submit(trans('cities.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
