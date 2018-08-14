@extends('layouts.panel')

@section('content')

<div class="btn-controls">
  <div class="btn-box-row row-fluid">
    <a href="{{ url('user') }}" class="btn-box big span4"><i class=" icon-group"></i><b>{{ $totalPupil }}</b>
      <p class="text-muted">Alunos</p>
    </a>
    <a href="{{ url('category') }}" class="btn-box big span4"><i class="icon-th-list"></i><b>{{ $totalCategories }}</b>
      <p class="text-muted">Categorias</p>
    </a>
    <a href="{{ url('course') }}" class="btn-box big span4"><i class="icon-th-large"></i><b>{{ $totalCourses }}</b>
      <p class="text-muted">Cursos</p>
    </a>
  </div>
  <div class="btn-box-row row-fluid">
    <div class="span8">
      <div class="row-fluid">
        <div class="span12">
          <a href="{{ url('user/create') }}" class="btn-box small span4"><i class="icon-user"></i><b>Novo Aluno</b>
          </a><a href="{{ url('course/create') }}" class="btn-box small span4"><i class="icon-book"></i><b>Novo Curso</b>
          </a><a href="#" class="btn-box small span4"><i class="icon-sign-blank"></i><b>Categorias</b>
          </a>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
          </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
          </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
            Rate</b> </a>
          </div>
        </div>
      </div>
      <ul class="widget widget-usage unstyled span4">
        <li>
          <p>
            <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
          </p>
          <div class="progress tight">
            <div class="bar" style="width: 78%;">
            </div>
          </div>
        </li>
        <li>
          <p>
            <strong>Mac</strong> <span class="pull-right small muted">56%</span>
          </p>
          <div class="progress tight">
            <div class="bar bar-success" style="width: 56%;">
            </div>
          </div>
        </li>
        <li>
          <p>
            <strong>Linux</strong> <span class="pull-right small muted">44%</span>
          </p>
          <div class="progress tight">
            <div class="bar bar-warning" style="width: 44%;">
            </div>
          </div>
        </li>
        <li>
          <p>
            <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
          </p>
          <div class="progress tight">
            <div class="bar bar-danger" style="width: 67%;">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!--/#btn-controls-->
  @endsection
