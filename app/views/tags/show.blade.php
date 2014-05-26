@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('tags.show_tag') }}</h1>

<p>{{ link_to_route('tags.index', trans('tags.return_all') ) }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>{{ trans('tags.title_') }}</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tag->title }}}</td>
                    <td>{{ link_to_route('tags.edit', trans('tags.edit'), array($tag->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tags.destroy', $tag->id))) }}
                            {{ Form::submit(trans('tags.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
