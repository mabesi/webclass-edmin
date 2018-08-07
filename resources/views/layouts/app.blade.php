<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap-responsive.min.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/css/theme.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/images/icons/css/font-awesome.css") }}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset("edmin/scripts/jquery-1.9.1.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/scripts/jquery-ui-1.10.1.custom.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/scripts/flot/jquery.flot.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/scripts/flot/jquery.flot.resize.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/scripts/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
    <script src="{{ asset("edmin/scripts/common.js") }}" type="text/javascript"></script>

    @stack('scripts')
        
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
