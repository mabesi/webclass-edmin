@extends('layouts.base')

@section('body')

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i>
      </a>

        <a class="brand" href="{{ route('home') }}">
          {{ config('app.name', 'WebClass') }}
        </a>

    </div>
  </div><!-- /navbar-inner -->
</div><!-- /navbar -->

<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="module module-login span4 offset4">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

          <form class="form-vertical" method="POST" action="{{ route('password.email') }}">

          {{ csrf_field() }}

          <div class="module-head">
            <h3>Endereço de e-mail</h3>
          </div>

          <div class="module-body">

            <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="controls row-fluid">
                <input class="span12" type="email" id="email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>

          </div>

          <div class="module-foot">

            <div class="control-group">
              <div class="controls clearfix">
                <button type="submit" class="btn btn-primary pull-right">Enviar Link de Recuperação de Senha</button>
              </div>
            </div>

          </div>

        </form>

      </div>
    </div>
  </div>
</div><!--/.wrapper-->

@include('layouts.footer')

@endsection
