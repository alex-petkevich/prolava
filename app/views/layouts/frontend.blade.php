@extends('layouts.frontend_clean')

@section('content')

<div class="row">
      <div class="col-md-3">
         <h2>{{ trans('general.last_comments') }}</h2>

         @if (count($comments = Comment::take(5)->get()) > 0)
         @foreach ($comments as $comment)
         @include('partials.comment', $comment)
         @endforeach
         @else
         {{ trans('general.no_comments') }}
         @endif
      </div>

      <div class="col-md-9">
         @yield('main')
      </div>
   </div>

@stop

