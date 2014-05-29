@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.all_cities')}}</h1>

<p>{{ link_to_route('cities.create', trans('cities.add_new')) }}</p>

@if ($cities->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>{{trans('cities.name_head')}}</th>
                <th></th>
                <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($cities as $city)
				<tr>
					<td>{{{ $city->name }}}</td>
                    <td>{{ link_to_route('cities.edit', trans('cities.edit'), array($city->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('cities.destroy', $city->id))) }}
                            {{ Form::submit(trans('cities.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
   {{trans('cities.no_cities')}}
@endif

@stop
