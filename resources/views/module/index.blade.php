@extends(config('sentinel.layout'))

@section('title')
@parent
Sedes
@stop

@section('content')
  <div class='container-fluid'>
    <ol class='breadcrumb'>
      <li><a href='/transmayas/public'>Home</a></li>
      <li class='active'>Sedes</li>
    </ol>
    <div class="well well-sm">      
      <h2>Sedes</h2>
    </div>
    <hr/>
    
    <sede-grid></sede-grid>

    <div>
      <a href="sede/create">
        <button type="button" class="btn btn-primary">
          Crear Nueva Sede
        </button>
      </a>
    </div>
  </div>

@stop