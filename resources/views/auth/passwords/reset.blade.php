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

          <form class="form-vertical" method="POST" action="{{ route('password.request') }}">

          {{ csrf_field() }}

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="module-head">
            <h3>Recuperação de Senha</h3>
          </div>

          <div class="module-body">

            <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="controls row-fluid">
                <input class="span12" type="email" id="email" name="email" placeholder="E-mail"  value="{{ $email or old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="controls row-fluid">
                <input class="span12" type="password" id="password" placeholder="Nova Senha" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

              </div>
            </div>

            <div class="control-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <div class="controls row-fluid">
                <input class="span12" type="password" id="password_confirmation" placeholder="Confirme a Nova Senha" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif

              </div>
            </div>

          </div>

          <div class="module-foot">

            <div class="control-group">
              <div class="controls clearfix">
                <button type="submit" class="btn btn-primary pull-right">Criar Nova Senha</button>
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
