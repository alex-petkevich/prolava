<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
   <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin.css') }}">
   <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

   @yield('styles')
</head>

<body>
 <div id="wrapper">

  <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="{{ route('home') }}">{{ trans('general.offers') }}</a>
  </div>
    @if(!Auth::guest())
    <ul class="nav navbar-right top-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{ Auth::user()->username }}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('user.profile') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('login.logout') }}"><i class="fa fa-fw fa-power-off"></i> {{{ trans('general.logout') }}}</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li @if(Request::path() == 'offers') class="active"@endif>{{ link_to_route('offers.index', trans('general.offers')) }}</li>
            <li @if(Request::path() == 'companies') class="active"@endif>{{ link_to_route('companies.index', trans('general.companies')) }}</li>
            <li @if(Request::path() == 'tags') class="active"@endif>{{ link_to_route('tags.index', trans('general.tags')) }}</li>
            <li @if(Request::path() == 'cities') class="active"@endif>{{ link_to_route('cities.index', trans('general.cities')) }}</li>
            <li @if(Request::path() == 'comments') class="active"@endif>{{ link_to_route('comments.index', trans('general.comments')) }}</li>
            <li @if(Request::path() == 'roles') class="active"@endif>{{ link_to_route('roles.index', trans('general.roles')) }}</li>
            <li @if(Request::path() == 'users') class="active"@endif>{{ link_to_route('users.index', trans('general.users')) }}</li>
        </ul>
    </div>

   @else
        <ul class="nav nav-pills pull-right">
            <li><a href="{{ route('login.index') }}">{{ trans('general.login') }}</a></li>
            <li><a href="{{ route('login.register') }}">{{ trans('general.register') }}</a></li>
        </ul>
   @endif
   </nav>


<div id="page-wrapper">

   <div class="container-fluid">
       @if (Session::has('message'))
       <div class="alert alert-warning alert-dismissable">
          <p>{{ Session::get('message') }}</p>
       </div>
       @endif

           @yield('main')

       </div>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('scripts')

</body>

</html>