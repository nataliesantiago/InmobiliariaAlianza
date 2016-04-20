<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>MUNDOCENTE</title>

   <!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Included Bootstrap Customization CSS Files -->	
	<link rel="stylesheet" href="css/bootstrap-extension.css" />
		
	<link rel="stylesheet" href="css/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-static-top mbottom20">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" href="#">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/">MunDocente</a>
				<div class="nav-collapse">
				<ul class="nav">
						<li><a href="/info">Publicaciones</a></li>
					</ul>
					<ul class="nav">
						<li><a href="/teacher_call">Convocatorias docente</a></li>
					</ul>
					<ul class="nav">
						<li><a href="/academic_event">Eventos académicos</a></li>
					</ul>
					<ul class="nav">
						<li><a href="/scientific_magazine">Revistas científicas</a></li>
					</ul>

					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="¿Qué deseas buscar?" class="input-medium search-query">
						<button type="submit" class="btn">Buscar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

		
	<div class="vspace40">		
		<div class="container marketing">
			<div class="row">
				
				@yield('content')

				<div class="span4">


					<div class="well">
						<form class="form login-form">
							<center><h2>Ingresa</h2></center>
							<div>
								<center><label>Usuario</label></center>
								<center><input id="Username" name="Username" type="text" /></center>

								<center><label>Contraseña</label></center>
								<center><input id="Password" name="Password" type="password" /></center>

								<center><label class="checkbox inline">
									<center><input type="checkbox" id="RememberMe" value="option1"></center> Recuerdame
								</label></center>

								<br /><br />

								<center><button type="submit" class="btn btn-success">Ingresar</button></center>
							</div>
							<br />
							<center><a href="#">Registrarse</a>&nbsp;&#124;&nbsp;<a href="#">¿Olvido su contraseña?</a></center>
					
						</form>

					</div>

					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header"><center><h3 style="color: #5A5A5A;">PUBLICACIONES</h3></center></li>
							<li><a href="/teacher_call">Convocatorias docente</a></li>
							<li><a href="/academic_event">Eventos académicos</a></li>
							<li><a href="/scientific_magazine">Revista científica</a></li>							
						</ul>
					</div>
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header"><center><h3 style="color: #5A5A5A;">Areas</h3></center></li>
							@foreach($areas as $area)
							@if($area->parent==null)
							<li><a href="#">{{ $area->name }}</a></li>
							@else
							<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;-{{  $area->name }}</a></li>
							@endif
							@endforeach
						</ul>
					</div>

					<hr />

					
				</div>
			</div>	
		</div>
	</div>

	<footer id="footer" class="vspace20">
		<div class="container">
			<div class="row">
				<div class="span7">
					<h4 style="text-align: center;">Ubicación y contacto</h4>
					<p style="text-align: center;"><i class="icon-map-marker"></i>&nbsp;Dirección: Calle 18 # 7-43 Tunja/Boyacá</p>
					<p style="text-align: center;"><i class="icon-phone"></i>&nbsp;Correo electronico: mundocente@mundocente.com</p>
					<P style="text-align: center;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d717.9141082609934!2d-73.36008869887702!3d5.530217782425579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7dd297720937%3A0xae08a35864347103!2sCl.+18+%237-43%2C+Tunja%2C+Boyac%C3%A1!5e1!3m2!1ses!2sco!4v1460131644457" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div> 

			</div>

			<div class="row">
				<div class="span6">
					<p>&copy; Copyright 2016 - &nbsp;MunDocente</p>
				</div>
				
			</div>
		</div>
	</footer>
	

	<script src="js/jquery-1.10.0.min.js"></script>
	<script src="js/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/holder.js"></script>
	<script src="js/script.js"></script>
</body>
</html>

