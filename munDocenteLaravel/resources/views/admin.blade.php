extends('layouts.routes.normalroute')

@section('menus')

    <li style="white-space: nowrap;"><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
    	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
    	<i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
    	<i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>
	<li class="current"><a href="/admin">
		<i class="glyphicon glyphicon-home"></i>Activar Usuarios</a></li>


@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">ACTIVAR USUARIOS</h2></center>			
			</div>
			<div class="3u 12u(mobile)"></div>

			<div class="6u 12u(mobile)">
				<section class="box">
				<a href="">Álvaro Hernández</a>
			   	<button type="button" name="activateUser" class="btn btn-success">Activar</button>	
			    </section>
			</div>
        </div>
    </div>
</div>

@stop