@extends(config('sentinel.layout'))


@section('title')
  @parent
  Auditoría
@stop

@section('content')

<div class='container-fluid'>
  <ol class='breadcrumb'>
    <li><a href='/transmayas/public'>Home</a></li>
    <li class='active'>Auditoría</li>
  </ol>

  <h2>Auditoría</h2>
  <hr/>
  <auditory-grid></auditory-grid>
  
  
  <div> <a href="auditory/create">
    <button type="button" class="btn btn-primary">
      Crear
    </button></a>
  </div>
  
</div>  
@stop