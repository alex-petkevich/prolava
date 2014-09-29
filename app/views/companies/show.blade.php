@extends('layouts.backend')

@section('main')

<h1>{{trans('companies.show_company')}}</h1>

<p>{{ link_to_route('companies.index', trans('companies.return_all')) }}</p>

<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
			<th>{{trans('companies.title_')}}</th>
            <th></th>
            <th></th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $company->title }}}</td>
                    <td>{{ link_to_route('companies.edit', trans('companies.edit'), array($company->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit(trans('companies.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
