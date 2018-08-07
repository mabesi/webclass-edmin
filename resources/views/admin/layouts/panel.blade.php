<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebClass</title>
    <link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/bootstrap/css/bootstrap-responsive.min.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/css/theme.css") }}" rel="stylesheet">
    <link type="text/css" href="{{ asset("edmin/images/icons/css/font-awesome.css") }}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

    <link type="text/css" href="{{ asset("edmin/images/icons/css/font-awesome.css") }}" rel="stylesheet">

  @stack('css')

</head>
<body>

@include('admin.layouts.navbar')

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">

              @include('admin.layouts.sidebar')

            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">

                @yield('content')

                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->
@include('admin.layouts.footer')

<script src="{{ asset("edmin/scripts/jquery-1.9.1.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/scripts/jquery-ui-1.10.1.custom.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/scripts/flot/jquery.flot.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/scripts/flot/jquery.flot.resize.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/scripts/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
<script src="{{ asset("edmin/scripts/common.js") }}" type="text/javascript"></script>

@stack('scripts')

</body>
</hmtl>
