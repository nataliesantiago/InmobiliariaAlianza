@extends('layouts.routes.normalroute')

@section('menus')
	
    <li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
    <li><a href="/own_publications">
		<i class="glyphicon glyphicon-education"></i> Mis publicaciones</a></li>       
	<li><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li class="current"><a href="/manage_publications">
		<i class="glyphicon glyphicon-education"></i> Administrar Publicaciones</a></li>
@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">ADMINISTRAR PUBLICACIONES</h2></center>			
			</div>
			<div class="3u 12u(mobile)"></div>

			<div class="6u 12u(mobile)">
				<section class="box">
				
				@foreach($users as $user)
				@if($user->type==2 && $user->activedAdmin != 0)
			    <div>
			    <!-- Aqui va la ruta para manejar las publicaciones  -->	
			    <a class="forgot btn-link" href="">{{ $user->fullname }}</a>
			    </div>
			    <br>
			    @endif
			    @endforeach

			    </section>
			</div>
        </div>
    </div>
</div>

@stop