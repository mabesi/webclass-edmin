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

				<div class="nav-collapse collapse navbar-inverse-collapse">

					<ul class="nav pull-right">

						<li>
              <a class="btn btn-link" href="{{ route('password.request') }}">
  							Esqueceu sua senha?
  						</a>
            </li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">

            <form class="form-vertical" method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

						<div class="module-head">
							<h3>Login</h3>
						</div>

						<div class="module-body">

							<div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="email" name="email" placeholder="E-mail"  value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
								</div>
							</div>

							<div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" placeholder="Senha" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

								</div>
							</div>

						</div>

						<div class="module-foot">

							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Entrar</button>
									<label class="checkbox">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
									</label>
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
