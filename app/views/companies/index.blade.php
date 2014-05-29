@extends('layouts.scaffold')

@section('main')

<h1>{{trans('companies.all_companies')}}</h1>

<p>{{ link_to_route('companies.create', trans('companies.add_new_company')) }}</p>

@if ($companies->count())
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>{{trans('companies.title')}}</th>
                <th></th>
                <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($companies as $company)
				<tr>
					<td>{{{ $company->title }}}</td>
                    <td>{{ link_to_route('companies.edit', trans('companies.edit'), array($company->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit(trans('companies.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
{{trans('companies.no_companies')}}
@endif

@stop
