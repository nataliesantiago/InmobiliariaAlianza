@extends('layouts.index')
	@section('content')

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<div class="logo"><span class="icon fa-diamond"></span></div>
			<h2>Bienvenido a Mundocente</h2>
			<p>Un sitio dedicado a informara a los docentes: <a href="http://html5up.net">HTML5 UP</a></p>
		</div>
	</section>

	<!-- Wrapper -->
	<section id="wrapper">

		<!-- One -->
		<section id="one" class="wrapper style3">
			<div class="inner">
				<div class="content">
					<time class="published" datetime="2016-05-01">Mayo 1, 2015</time>
					<h2 class="major">EVENTO CAMARA DE COMERCIO</h2>
					<h4 class><time class="published" datetime="2016-05-01">FECHA DE INICIO: Mayo 8, 2015</time></h4>
					<h4 class>INSTITUCIÓN: Camara de comercio</h4>
					<h4 class>ENCARGADO: Pepito Perez</h4>
					<h4 class>CIUDAD: Tunja</h4>
					<h4 class>AREAS: Licenciatura, Derecho</h4>
					<a href="http://www.ccb.org.co">Enlace del evento</a>
					<h1></h1>
					<ul class="stats">
						<li><a href="#" class="icon fa-heart"> 28</a></li>
						<li><a href="#" class="icon fa-comment"> 128</a></li>
					</ul>
					<a href="#" class="special">Más información</a>
				</div>
			</div>
		</section>


		<section id="two" class="wrapper alt style5">
			<div class="inner">
				<div class="content">
					<time class="published" datetime="2015-11-01">Noviembre 1, 2015</time>
					<h2 class="major">Curso de planeación</h2>
					<p> ¿Como hacer planeación estratégica de su empresa?

					El módulo es 100 % virtual.

					Cada participante puede organizar su propia agenda y es responsable de avanzar en el contenido.

					Se puede acceder al campus virtual todos los días de la semana, durante las 24 horas del período de cada curso.

					La metodología está centrada en el participante y adaptada para que su intervención pueda enriquecer el proceso de aprendizaje.</p>
					<h4>ENCARGADO: </h4>
					<h4 class="major">Juana de Arco</h4>
					<ul class="stats">
						<li><a href="#" class="icon fa-heart"> 28</a></li>
						<li><a href="#" class="icon fa-comment"> 128</a></li>
					</ul>
					
				</div>
			</div>
		</section>

	<section id="banner">	
		<div class="inner">
		<ul class="actions pagination">
			<li><a href="" class="disabled button big previous">Página anterior</a></li>
			<li><a href="#" class="button big next">Página siguiente</a></li>
		</ul>
	</div>
	</section>

	<!-- Footer -->
	<section id="footer">
		<div class="inner">
			<h2 class="major">Contacto</h2>
			<form method="post" action="#">
				<div class="field">
					<label for="name">Nombre</label>
					<input type="text" name="name" id="name" />
				</div>
				<div class="field">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" />
				</div>
				<div class="field">
					<label for="message">Mensaje</label>
					<textarea name="message" id="message" rows="4"></textarea>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Send Message" /></li>
				</ul>
			</form>
			<ul class="contact">
				<li class="fa-home">
					Untitled Inc<br />
					1234 Somewhere Road Suite #2894<br />
					Nashville, TN 00000-0000
				</li>
				<li class="fa-phone">(000) 000-0000</li>
				<li class="fa-envelope"><a href="#">mundocente@dominoo.com</a></li>
				<li class="fa-twitter"><a href="#">twitter.com/mundocente</a></li>
				<li class="fa-facebook"><a href="#">facebook.com/mundocente</a></li>
				<li class="fa-instagram"><a href="#">instagram.com/mundocente</a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled Inc. Tdoso los derechos reservados.</li><li>Design: <a href="http://html5up.net">MUNDOCENTE</a></li>
			</ul>
		</div>
	</section>

	@endsection