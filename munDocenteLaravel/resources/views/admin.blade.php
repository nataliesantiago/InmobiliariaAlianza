@extends('layouts.routes.normalroute')

@section('menus')

    <li class="current"><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>


@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">ACTIVAR PUBLICADORES</h2></center>			
			</div>
			<div class="3u 12u(mobile)"></div>

			<div class="6u 12u(mobile)">
				<section class="box">
				<!-- Aqui va el foreach -->
				
			    <div>
			    <a class="forgot btn-link" href="#">Natalie Santiago</a>
			   	<ul class="nav navbar-nav navbar-right">
			        <button type="button" name="activateUser" class="btn btn-success">Activar 
			   		<i class="glyphicon glyphicon-ok-circle"></i></button>	
			    	<button type="button" name="inactivateUser" class="btn btn-danger">Inactivar 
			   		<i class="glyphicon glyphicon-remove-circle"></i></button>
			    </ul>
			    </div>
			    <br>

				<div>
				<a class="forgot btn-link" href="#">Álvaro Hernández MIllán</a>
			   	<ul class="nav navbar-nav navbar-right">
			        <button type="button" name="activateUser" class="btn btn-success">Activar 
			   		<i class="glyphicon glyphicon-ok-circle"></i></button>
			   		<button type="button" name="inactivateUser" class="btn btn-danger">Inactivar 
			   		<i class="glyphicon glyphicon-remove-circle"></i></button>	
			    </ul>
			    </div>
			    <br>
			    
			    <div>
			    <a class="forgot btn-link" href="#">Diego Armando Sierra</a>
			   	<ul class="nav navbar-nav navbar-right">
			        <button type="button" name="activateUser" class="btn btn-success">Activar 
			   		<i class="glyphicon glyphicon-ok-circle"></i></button>
			   		<button type="button" name="inactivateUser" class="btn btn-danger">Inactivar 
			   		<i class="glyphicon glyphicon-remove-circle"></i></button>	
			    </ul>
			    </div>

			    </section>
			</div>
        </div>
    </div>
</div>

@stop