<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li class="active">
          <a href="{{ route('home') }}"><i class="menu-icon icon-home"></i>Home</a>
        </li>
        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
        </li>
        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
            11</b> </a></li>
        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
            19</b> </a></li>
    </ul>
    <!--/.widget-nav-->

    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li>
          <a class="" data-toggle="collapse" href="#togglePages">
            <i class="menu-icon icon-group"></i>
            <i class="icon-chevron-down pull-right"></i>
            <i class="icon-chevron-up pull-right"></i>
            Usuários
          </a>
            <ul id="togglePages" class="collapse in unstyled">
              <li><a href="{{ url('user/create') }}"><i class="icon-user"></i>Novo Aluno </a></li>
              <li><a href="{{ url('user') }}"><i class="icon-list"></i>Lista de Alunos </a></li>
              <li><a href="other-user-profile.html"><i class="icon-lock"></i>Alterar Senha </a></li>
            </ul>
        </li>
        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
    </ul>


    <ul class="widget widget-menu unstyled">
        <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
        <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
        <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
    </ul>

    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li>
          <a class="collapsed" data-toggle="collapse" href="#togglePages">
            <i class="menu-icon icon-group"></i>
            <i class="icon-chevron-down pull-right"></i>
            <i class="icon-chevron-up pull-right"></i>
            Usuários
          </a>
            <ul id="togglePages" class="collapse unstyled">
              <li><a href="other-login.html"><i class="icon-user"></i>Novo Aluno </a></li>
              <li><a href="{{ url('user') }}"><i class="icon-list"></i>Lista de Alunos </a></li>
              <li><a href="other-user-profile.html"><i class="icon-lock"></i>Alterar Senha </a></li>
            </ul>
        </li>
        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
    </ul>

</div>
<!--/.sidebar-->
