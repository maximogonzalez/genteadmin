@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Editar Sede
@stop

@section('content')
  
  <ol class='breadcrumb'>
    <li><a href='/transmayas/public/'>Home</a></li>
    <li><a href='/transmayas/public/sede'>Sede</a></li>
    <li><a href='/transmayas/public/sede/{{$sede->id}}'>Consultar</a></li>
    <li class='active'>Editar</li>
  </ol>
  <div class="well well-sm"> 
    <h1>Editar Sede</h1>
  </div>
  <hr/>

  <form class="form" role="form" method="POST" action="{{ url('/sede/'. $sede->id)  }}">
    <input type="hidden" name="_method" value="patch">
    {{ csrf_field() }}

    <!-- widget_name Form Input -->
    <!--
      'nombre_sede'
      'descripcion_sede'
      'ubicacion_sede'
      'estatus_sede'
      -->
      <!-- name Form Input -->
    <div class="well well-sm">
      <div class="container-fluid">           
        <div class="row">           
          <div class="col-md-5">
            <div class="form-group{{ $errors->has('nombre_sede') ? ' has-error' : '' }}">
              <label class="control-label">Nombre Sede</label>
              <input type="text" class="form-control" name="nombre_sede" value="{{ $sede->nombre_sede }}">
              @if ($errors->has('nombre_sede'))
                <span class="help-block">
                  <strong>{{ $errors->first('nombre_sede') }}</strong>
                </span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group{{ $errors->has('descripcion_sede') ? ' has-error' : '' }}">
              <label class="control-label">Descripción Sede</label>
              <input type="text" class="form-control" name="descripcion_sede" value="{{ $sede->descripcion_sede }}">
              @if ($errors->has('descripcion_sede'))
                <span class="help-block">
                  <strong>{{ $errors->first('descripcion_sede') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group{{ $errors->has('ubicacion_sede') ? ' has-error' : '' }}">
              <label class="control-label">Ubicación Sede</label>
              <input type="text" class="form-control" name="ubicacion_sede" value="{{ $sede->ubicacion_sede }}">
              @if ($errors->has('ubicacion_sede'))
                <span class="help-block">
                  <strong>{{ $errors->first('ubicacion_sede') }}</strong>
                </span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="form-group{{ $errors->has('estatus_sede') ? ' has-error' : '' }}">
              <label class="control-label">Estatus Sede</label>
              <input type="hidden" class="form-control" id="estatus_sede" name="estatus_sede" value="{{ $sede->estatus_sede }}">                
              @if($sede->estatus_sede == true)
                <input type="checkbox" class="form-control" id="restatus" name="restatus" checked value=1 Onclick="yesno('restatus','yesnos');" />
                <label class="checkbox-inline" for="restatus" name="yesnos" id="yesnos"><h5><b>Tipo Vehículo Activo</b></h5></label>  
              @else
          	    <input type="checkbox" class="form-control" id="restatus" name="restatus" value=0 Onclick="yesno('restatus','yesnos');" />
                <label class="checkbox-inline" for="restatus" name="yesnos" id="yesnos"><h5><b>Tipo Vehículo Inactivo</b></h5></label>  
              @endif
              @if ($errors->has('estatus_sede'))
                <span class="help-block">
                  <strong>{{ $errors->first('estatus_sede') }}</strong>
                </span>
              @endif
            </div>
          </div>
        </div>  
      </div>
    </div> 
    <div class="form-group">
      <button type="submit" class="btn btn-primary" Onclick="yesno('restatus','yesnos');">
        Guardar Cambios
      </button>
    </div>
  </form>

@stop

@section('scripts')

  <script>
    function yesno(thecheckbox, thelabel)
    {
      var checkboxvar = document.getElementById(thecheckbox);
      var labelvar = document.getElementById(thelabel);
      var textvar = document.getElementById('estatus_sede');
      if (checkboxvar.checked == false)
      {
        checkboxvar.value = 0;
        labelvar.innerHTML = "<h5><b>Sede Inactiva</b></h5>";
        textvar.value = 0;
      }
      else
      {
        checkboxvar.value = 1;
        labelvar.innerHTML = "<h5><b>Sede Activa</b></h5>";
        textvar.value = 1;
      }
    }    
  </script>

@stop