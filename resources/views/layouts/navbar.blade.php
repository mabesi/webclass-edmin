<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ route('home') }}">{{ config('app.name', 'WebClass') }} </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>

                        <ul class="nav pull-right">
                            <li>
                              <form class="navbar-search pull-left input-append" action="#">
                              <input type="text" class="span3">
                              <button class="btn" type="button">
                                  <i class="icon-search"></i>
                              </button>
                              </form>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-cog"></i>

                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">{{ Auth::user()->name }}</li>
                                    <li><a href="#">Alterar Senha</a></li>
                                    <li class="divider"></li>
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
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
