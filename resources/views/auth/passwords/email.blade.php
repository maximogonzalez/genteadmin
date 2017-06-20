<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Prueba Artha</title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
				{!! BootForm::open(['url' => url('/password/email'), 'method' => 'post']) !!}
				<h1>Recuperar Clave</h1>
	
				{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}
					
				{!! BootForm::submit('Enviar solicitud', ['class' => 'btn btn-default col-md-9']) !!}
	
				<div class="clearfix"></div>
				<br />
					
				<div class="separator">
					<p class="change_link">Posee su clave ?
						<a href="{{ url('/login') }}" class="to_register"> Ingrese al sistema </a>
					</p>
					
					<div class="clearfix"></div>
					<br />
					
					<div class="container">
						<img class="img" src="{{asset('images/logo_artha.jpg')}}" width="20%"> <h1>Prueba Artha</h1>
						<p>Sistema de Software Libre Desarrollado con <img class="img" src="{{asset('images/logo_laravel.jpg')}}" width="7%"> Laravel 5.4</p>
						<p>Prueba Artha - Versión 1.0 - 2017</p>
						<p><small>Gentelella Alela! is a Bootstrap 3 template. ©2016 All Rights Reserved. Privacy and Terms<small></p>
				    </div>
				</div>
					
                {!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>