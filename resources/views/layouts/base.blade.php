<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Template Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ENV Title -->
	<title>{{ config('app.name', 'WebClass') }}</title>

  <!-- Template CSS -->
	<link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
	<link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap-responsive.min.css") }}" rel="stylesheet">
	<link type="text/css" href="{{ asset("edmin/css/theme.css") }}" rel="stylesheet">
	<link type="text/css" href="{{ asset("edmin/images/icons/css/font-awesome.css") }}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

  <!-- App CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Page CSS -->
  @stack('css')

</head>
<body>

@yield('body')

  <!-- Base Scripts -->
	<!-- <script src="{{ asset("edmin/scripts/jquery-1.9.1.min.js") }}" type="text/javascript"></script> -->
	<script src="{{ asset("edmin/scripts/jquery-3.3.1.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("edmin/scripts/jquery-ui-1.10.1.custom.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("edmin/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

  @stack('all_scripts')

  <!-- App Script -->
  <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script>

</body>
</html>
