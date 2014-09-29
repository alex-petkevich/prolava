<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
   <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
   @yield('styles')
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
       <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand" href="{{ route('home') }}">{{ trans('general.offers') }}</a>
        </div>
            <ul class="nav nav-pills pull-right">
            @if(Auth::guest())
                <li><a href="{{ route('login.index') }}">{{ trans('general.login') }}</a></li>
                <li><a href="{{ route('login.register') }}">{{ trans('general.register') }}</a></li>
            @else
            @if(Auth::user()->isAdmin())
                <li><a href="{{ route('login.dashboard') }}" class="btn">{{ trans('general.backend') }}</a></li>
            @endif
                <li><a href="{{ route('home.bookmarks') }}" class="btn">{{ trans('general.bookmarks') }}</a></li>
                <li><a href="{{ route('user.profile') }}" class="btn">{{ trans('general.profile') }}</a></li>
                <li><a href="{{ route('login.logout') }}" class="btn">{{ trans('general.logout') }}</a></li>
            @endif
            </ul>

      </div>
</nav>

<div class="container">

   @if (Session::has('message'))
   <div class="flash alert">
      <p>{{ Session::get('message') }}</p>
   </div>
   @endif

   @yield('content')



</div>

<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
@yield('scripts')

</body>

</html>
