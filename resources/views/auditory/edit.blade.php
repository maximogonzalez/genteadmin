@extends(config('sentinel.layout'))

@section('title')

    <title>Edit Auditory</title>

@endsection

@section('content')


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/auditory'>Auditories</a></li>
        <li><a href='/auditory/{{$auditory->id}}'>{{$auditory->name}}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1>Edit Auditory</h1>

    <hr/>


    <form class="form" role="form" method="POST" action="{{ url('/auditory/'. $auditory->id)  }}">
        <input type="hidden" name="_method" value="patch">
    {{ csrf_field() }}

    <!-- widget_name Form Input -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label">Auditory Name</label>

            <input type="text" class="form-control" name="name" value="{{ $auditory->name }}">

            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Edit
            </button>
        </div>

    </form>


@endsection