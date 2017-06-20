@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="left_col">
		<div class="clearfix borderbox"><!-- column -->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="img" src="{{asset('images/fondo_artha2.png')}}"  width="100%">
			</div>			
		</div>
	</div>
	
    <!-- /page content -->
		
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            <small>
				Sistema de Software Libre Desarrollado con 
				<img class="img" src="{{asset('images/logo_laravel.jpg')}}" width="3%"> 
				Laravel 5.4 - Prueba Artha - Versión 1.0 - 2017  - Gentelella Alela! is a Bootstrap 3 template. ©2016 All Rights Reserved. Privacy and Terms
			</small>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@stop