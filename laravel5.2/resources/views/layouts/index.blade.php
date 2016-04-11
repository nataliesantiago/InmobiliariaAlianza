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
						<li><a href="/teacher_call">Convocatorias docente</a></li>
					</ul>
					<ul class="nav">
						<li><a href="/academic_event">Eventos académicos</a></li>
					</ul>
					<ul class="nav">
						<li><a href="/scientific_magazine">Revistas científicas</a></li>
					</ul>
					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="¿qué deseas buscar?" class="input-medium search-query">
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
							<li class="nav-header"><center><h3>PUBLICACIONES</h3></center></li>
							<li><a href="/teacher_call">Convocatorias docente</a></li>
							<li><a href="/academic_event">Eventos académicos</a></li>
							<li><a href="/scientific_magazine">Revista científica</a></li>							
						</ul>
					</div>
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header"><center><h3>Areas</h3></center></li>
							@foreach($areas as $area)
							@if($area->parent==null)
							<li><a href="#">{{ $area->name }}</a></li>
							@else
							<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;-{{  $area->name }}</a></li>
							@endif
							@endforeach
						</ul>
					</div>

					<ul class="tagcloud">
						<li><a href="#" class="tag3">markup</a></li>
						<li><a href="#" class="tag2">tools</a></li>
						<li><a href="#" class="tag4">seo</a></li>
						<li><a href="#" class="tag10">css3</a></li>
						<li><a href="#" class="tag3">microformats</a></li>
						<li><a href="#" class="tag2">w3c</a></li>
						<li><a href="#" class="tag5">jQuery</a></li>
						<li><a href="#" class="tag10">twitter bootstrap</a></li>
						<li><a href="#" class="tag2">semantic</a></li>
						<li><a href="#" class="tag7">layout</a></li>
						<li><a href="#" class="tag4">design</a></li>
						<li><a href="#" class="tag6">mobile</a></li>
						<li><a href="#" class="tag1">php</a></li>
						<li><a href="#" class="tag2">tips</a></li>
						<li><a href="#" class="tag8">mysql</a></li>
						<li><a href="#" class="tag1">menu</a></li>
						<li><a href="#" class="tag3">icons</a></li>
						<li><a href="#" class="tag5">grid</a></li>
						<li><a href="#" class="tag2">templates</a></li>
						<li><a href="#" class="tag5">javascript</a></li>
						<li><a href="#" class="tag9">html5</a></li>
						<li><a href="#" class="tag4">trends</a></li>
						<li><a href="#" class="tag2">tutorials</a></li>
					</ul>

					<hr />

					
				</div>
			</div>	
		</div>
	</div>

	<footer id="footer" class="vspace20">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h4>Acerca de</h4>
					<blockquote>This is a set of free responsive template free to download and to use to create your own website.<br />
						The package contains varius tipologies of layouts.
					</blockquote>
				</div> 

				<div class="span4">
					<h4>Ubicación y contacto</h4>
					<p><i class="icon-map-marker"></i>&nbsp;I do not Know Avenue, A City</p>
					<p><i class="icon-phone"></i>&nbsp;Phone: 234 739.126.72</p>
					<p><i class="icon-print"></i>&nbsp;Fax: 213 123.12.090</p>
					<p><i class="icon-envelope"></i>&nbsp;Email: info@mydomain.com</p>
					<p><i class="icon-globe"></i>&nbsp;Web: http://www.mydomain.com</p>
				</div>

				<div class="span4">
					<h4>Newsletter</h4>
					<p>Write you email to subscribe to our Newsletter service. Thanks!</p>
					<form class="form-newsletter">
						<div class="input-append">
							<input type="email" class="span2" placeholder="your email">
							<button type="submit" class="btn">Subscribe</button>
						</div>
					</form>

					<h4>Follow Us on Socials</h4>
					<p>
						<a href="#"><img src="images/socials/facebook.png" alt="" /></a>
						<a href="#"><img src="images/socials/twitter.png" alt="" /></a>
						<a href="#"><img src="images/socials/youtube.png" alt="" /></a>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="span6">
					<p>&copy; Copyright 2012.&nbsp;<a href="#">Privacy</a>&nbsp;&amp;&nbsp;<a href="#">Terms and Conditions</a></p>
				</div>
				<div class="span2 offset4">
					<a href="http://www.responsivewebmobile.com" target="_blank">credits by Responsive Web Mobile</a>
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