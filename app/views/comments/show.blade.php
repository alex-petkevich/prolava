@extends('layouts.scaffold')

@section('main')

<h1>{{trans('cities.show_comments')}}</h1>

<p>{{ link_to_route('comments.index', trans('cities.return_all')) }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
         <th>{{trans('cities.body_')}}</th>
         <th>{{trans('cities.user_id_')}}</th>
         <th>{{trans('cities.offer_id_')}}</th>
         <th>{{trans('cities.mark_')}}</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $comment->body }}}</td>
					<td>{{{ $comment->user_id }}}</td>
					<td>{{{ $comment->offer_id }}}</td>
					<td>{{{ $comment->mark }}}</td>
                    <td>{{ link_to_route('comments.edit', trans('cities.edit'), array($comment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('comments.destroy', $comment->id))) }}
                            {{ Form::submit(trans('cities.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
