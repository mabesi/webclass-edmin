@extends('layouts.base')

@section('body')

@include('layouts.navbar')

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">

              @include('layouts.sidebar')

            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">

                  @include('layouts.messages')

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

@include('layouts.footer')

@endsection

@push('all_scripts')
  <!-- Backend Scripts -->
  <script src="{{ asset("edmin/scripts/flot/jquery.flot.js") }}" type="text/javascript"></script>
  <script src="{{ asset("edmin/scripts/flot/jquery.flot.resize.js") }}" type="text/javascript"></script>
  <script src="{{ asset("edmin/scripts/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
  <script src="{{ asset("edmin/scripts/common.js") }}" type="text/javascript"></script>
  @stack('scripts')
@endpush
