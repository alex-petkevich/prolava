@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('tags.all_tags') }}</h1>

<p>{{ link_to_route('tags.create', trans('tags.add_new_tag')) }}</p>

@if ($tags->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans('tags.title_') }}</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tags as $tag)
				<tr>
					<td>{{{ $tag->title }}}</td>
                    <td>{{ link_to_route('tags.edit', trans('tags.edit'), array($tag->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tags.destroy', $tag->id))) }}
                            {{ Form::submit(trans('tags.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
   {{ trans('tags.no_tags') }}
@endif

@stop
