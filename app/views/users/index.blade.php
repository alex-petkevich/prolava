@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('users.all_users') }}</h1>

@if ($users->count())
<table class="table table-striped table-bordered">
   <thead>
   <tr>
      <th>{{ trans('users.username_') }}</th>
      <th>{{ trans('users.email_') }}</th>
      <th>{{ trans('users.roles_') }}</th>
   </tr>
   </thead>

   <tbody>
   @foreach ($users as $user)
   <tr>
      <td>{{{ $user->username }}}</td>
      <td>{{{ $user->email }}}</td>
      <td>
         @foreach($user->roles as $role)
         <span class="badge">{{{$role->role}}}</span>
         @endforeach
      </td>
      <td>{{ link_to_route('users.edit', trans('users.edit'), array($user->id), array('class' => 'btn btn-info')) }}</td>
      <td>
         {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
         {{ Form::submit(trans('users.delete'), array('class' => 'btn btn-danger')) }}
         {{ Form::close() }}
      </td>
   </tr>
   @endforeach
   </tbody>
</table>
@else
   {{ trans('users.no_users') }}
@endif

@stop