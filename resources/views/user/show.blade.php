@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Vista Sede
@stop

@section('content')
   <ol class='breadcrumb'>
    <li><a href='/transmayas/public/'>Home</a></li>
    <li><a href='/transmayas/public/sede'>Sedes / </a> Vista Sede {{ $sede->nombre_sede }} </li>   
  </ol>
  <div class="well well-sm"> 
    <h1>Sede: {{ $sede->nombre_sede }}</h1>
  </div>
  <hr/>
  <br><br><br><br>
  <div class="container">
    <div class="panel panel-default">
      <!-- Table -->
      <table class="table table-striped">
        <tr>
          <th>Id</th>
          <th>Descripción</th>
          <th>Ubicación</th>
          <th>Estatus</th>
          <th>Fecha Registro</th>  
        </tr>
        <tr>
          <td width="10%">{{ $sede->id }} </td>
          <td width="20%">{{ $sede->descripcion_sede }}</td>
          <td width="20%">{{ $sede->ubicacion_sede }}</td>
          <td width="15%">
            <b>
              @if($sede->estatus_sede == true)
              	Activa
              @else
              	Inactiva
              @endif
            </b>  
          </td>
          <td width="15%">{{ date('d-m-Y', strtotime($sede->created_at)) }}</td>  
          <td width="20%">
            <form class="form" role="form" method="POST" action="{{ url('/sede/'. $sede->id) }}">
              <a href="/transmayas/public/sede/{{ $sede->id }}/edit">
                <button type="button" class="btn btn-default">
                  Editar
                </button>
              </a>
              <input type="hidden" name="_method" value="delete">
              {{ csrf_field() }}
              <input class="btn btn-danger" Onclick="return ConfirmDelete();"
              type="submit" value="Borrar">
            </form>
          </td>
        </tr>
      </table>
    </div>
  </div>
@stop

@section('scripts')

  <script>
    function ConfirmDelete()
    {
      var x = confirm("¿Seguro desea eliminar este registro?");
      if (x)
        return true;
      else
        return false;
    }
  </script>

@stop