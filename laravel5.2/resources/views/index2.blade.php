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

	@foreach($publications as $publication)
		<section id="one" class="wrapper style3">
			<div class="inner">
				<div class="content">
					<time class="published" datetime="2016-05-01">Fecha publicación: {{ $publication->date_publication }}</time>
					<h2 class="major">{{ $publication->name }}</h2>
					<h4 class><time class="published" datetime="2016-05-01">Fecha de inicio: {{ $publication->start_date }}</time></h4>
					<h4 class>Institución: falta relacionar al publicador</h4>
					<h4 class>Publicador: {{ $publication->username }}</h4>
					<h4 class>{{ $publication->place }}</h4>
					<h4 class>Area(s): son agregadas pro el publicador</h4>
					<a href="http://www.ccb.org.co">Url externa: {{ $publication->url }}</a>
					<h1></h1>
					<ul class="stats">
						<li><a href="#" class="icon fa-heart"> 0</a></li>
						<li><a href="#" class="icon fa-comment"> 0</a></li>
					</ul>
					<a href="#" class="special">Más información</a>
				</div>
			</div>
		</section>
	@endforeach

	<section id="banner">	
		<div class="inner">
		<ul class="actions pagination">
			<center><li>{!! $publications->links() !!}</li></center>
		</ul>
	</div>
	</section>

	
		<!-- One 
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
-->
		<!-- Two
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
-->
	<!--<section id="banner">	
		<div class="inner">
		<ul class="actions pagination">
			<li><a href="" class="disabled button big previous">Página anterior</a></li>
			<li><a href="#" class="button big next">Página siguiente</a></li>
		</ul>
	</div>
	</section>
-->
	<!-- Footer -->
	

	@stop