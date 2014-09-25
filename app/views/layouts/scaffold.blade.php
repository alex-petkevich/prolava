<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
   <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

   <style>
   </style>
   @yield('styles')
</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
  <div class="navbar-header">
   <a class="navbar-brand" href="{{ route('home') }}">{{ trans('general.offers') }}</a>
  </div>
    @if(!Auth::guest())
     <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      @if(Auth::user()->isAdmin())
      <li>{{ link_to_route('offers.index', trans('general.offers')) }}</li>
      <li>{{ link_to_route('companies.index', trans('general.companies')) }}</li>
      <li>{{ link_to_route('tags.index', trans('general.tags')) }}</li>
      <li>{{ link_to_route('cities.index', trans('general.cities')) }}</li>
      @endif
      @if(Auth::user()->isAdmin())
      <li>{{ link_to_route('comments.index', trans('general.comments')) }}</li>
      @endif
      @if(Auth::user()->isAdmin())
      <li>{{ link_to_route('roles.index', trans('general.roles')) }}</li>
      <li>{{ link_to_route('users.index', trans('general.users')) }}</li>
      @endif
      <li class="pull-right">{{ link_to_route('login.logout', trans('general.logout')) }}</li>
   </ul>
   </div>

   @else
        <ul class="nav nav-pills pull-right">
            <li><a href="{{ route('login.index') }}">{{ trans('general.login') }}</a></li>
            <li><a href="{{ route('login.register') }}">{{ trans('general.register') }}</a></li>
        </ul>
   @endif
   </div>
   </nav>

   <div class="container">
   @if (Session::has('message'))
   <div class="alert alert-warning alert-dismissable">
      <p>{{ Session::get('message') }}</p>
   </div>
   @endif

   @yield('main')
   </div>

<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
@yield('scripts')

</body>

</html>