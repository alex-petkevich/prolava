@extends('layouts.scaffold')

@section('main')

<h1>{{trans('comments.all_comments')}}</h1>

<p>{{ link_to_route('comments.create', trans('comments.add_new_comment')) }}</p>

@if ($comments->count())
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>{{trans('cities.body_')}}</th>
				<th>{{trans('cities.user_id_')}}</th>
				<th>{{trans('cities.offer_id_')}}</th>
				<th>{{trans('cities.mark_')}}</th>
                <th></th>
                <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($comments as $comment)
				<tr>
					<td>{{{ $comment->body }}}</td>
					<td>{{{ $comment->user_id }}}</td>
					<td>{{{ $comment->offer_id }}}</td>
					<td>{{{ $comment->mark }}}</td>
                    <td>{{ link_to_route('comments.edit', trans('comments.edit'), array($comment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('comments.destroy', $comment->id))) }}
                            {{ Form::submit(trans('comments.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
   {{trans('comments.no_comments')}}
@endif

@stop
