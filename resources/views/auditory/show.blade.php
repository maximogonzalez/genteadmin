@extends(config('sentinel.layout'))

@section('title')
@parent
Auditoría
@stop

@section('content')

  <ol class='breadcrumb'>
    <li><a href='/transmayas/public'>Home</a></li>
    <li><a href='/transmayas/public/auditory'>Auditoría</a></li>
    <li><a href='/auditory/{{ $auditory->id }}'>{{ $auditory->name }}</a></li>
  </ol> 

  <h1>Detalle Registro de Auditoría N° {{ $auditory->id }}</h1>

  <hr/>
  <br><br>
  <div class="panel panel-default">
    <!-- Table -->
    <table class="table table-striped">
      <tr>
        <th>Id</th>
        <th>Id Modelo</th>
        <th>Modelo</th>
        <th>Acción</th>
        <th>Fecha y Hora</th>
        <th>Usuario</th>
        <th>Máquina</th>
        <th>Ip</th>            
      </tr>
      <tr>
        <td>{{ $auditory->id }} </td>
        <td>{{ $auditory->id_modelo }} </td>
        <td>{{ $auditory->modelo }} </td>
        <td>{{ $auditory->accion }} </td>  
        <td>{{ $auditory->created_at }}</td>          
        <td>{{ $row->username }} </td>
        <td>{{ $auditory->nombre_maquina }}</td>
        <td>{{ $auditory->ip }}</td>  
      </tr>
    </table>   
  </div>
  <br>  
  <div class="well clearfix">
    <div class="col-md-2">
      <strong>Valor Anterior:</strong> 	 
    </div>
    <div class="col-md-10">
      {{ $auditory->valor_anterior }} 	 
    </div>
    <hr>
    <div class="col-md-2">
      <strong>Valor Nuevo:</strong>  	 
    </div>
    <div class="col-md-10">
      {{ $auditory->valor_nuevo }} 	 
    </div>      
  </div>
  
  <br><br>

@stop

