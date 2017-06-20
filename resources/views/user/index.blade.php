@extends('layouts.blank')

@section('title')
@parent
Usuarios
@stop

@section('main_container')
  <div class='container-fluid'>
    <ol class='breadcrumb'>
      <li><a href='/genteadmin/public'>Home</a></li>
      <li class='active'>Usuarios</li>
    </ol>
    <div class="well well-sm">      
      <h2>Usuarios</h2>
    </div>
    <hr/>
    
    

    <div>
      <a href="sede/create">
        <button type="button" class="btn btn-primary">
          Crear Nuevo Usuario 
        </button>
      </a>
    </div>
  </div>

@stop