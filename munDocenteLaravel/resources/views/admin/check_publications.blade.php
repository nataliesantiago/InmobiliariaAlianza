@extends('layouts.routes.normalroute')

@section('menus')
	
    <li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
    <li><a href="/own_publications">
		<i class="glyphicon glyphicon-folder-open"></i> Mis publicaciones</a></li>       
	<li><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li class="current"><a href="/manage_publications">
		<i class="glyphicon glyphicon-wrench"></i> Administrar publicaciones</a></li>
@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">ADMINISTRAR PUBLICACIONES</h2></center>			
				<br>
				<div class="alert alert-info alert-dismissible" role="alert">
				  <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Información</h4>&nbsp;&nbsp;&nbsp;Entre al link de cada nombre de usuario para ver sus correspondientes publicaciones. 
				</div>
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				<section class="box">
				<table class="table">
					<tr>
					<td><h4>Nombre de usuario</h4></td>
					<td><h4>Institución académica</h4></td>
					</tr>
				@foreach($users as $user)
				@if($user->type==2 && $user->activedAdmin != 0)
			    <tr>
				<!-- Aqui va la ruta para manejar las publicaciones  -->	
			    <td>
			    	<a class="forgot btn-link" href="">{{ $user->fullname }}</a>
			    </td>
			    	@foreach($academic_institutions as $academic_institution)
			    		@if($academic_institution->id == $user->academic_institution)
			    		<td>{{ $academic_institution->name }}</td>
			    		@endif
			    	@endforeach
			    
			    </tr>
			    @endif
			    @endforeach
			    </table>
			    </section>
			</div>
        </div>
    </div>
</div>

@stop