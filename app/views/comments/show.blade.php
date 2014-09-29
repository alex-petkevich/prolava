@extends('layouts.backend')

@section('main')

<h1>{{trans('comments.show_comments')}}</h1>

<p>{{ link_to_route('comments.index', trans('comments.return_all')) }}</p>

<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
         <th>{{trans('comments.body_')}}</th>
         <th>{{trans('comments.user_id_')}}</th>
         <th>{{trans('comments.offer_id_')}}</th>
         <th>{{trans('comments.mark_')}}</th>
            <th></th>
            <th></th>
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
