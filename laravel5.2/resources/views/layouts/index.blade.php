<!DOCTYPE HTML>
<!--
Solid State by HTML5 UP
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>MUNDOCENTE</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="page-wrapper">

	<!-- Header -->
	<header id="header" class="alt">
		<h1><a href="index.html">Mundocente</a></h1>
		<nav class="main">
			<a href="#menu">Menu</a>

		</nav>

	</header>


	<!-- Menu -->
	<nav id="menu">
		<div class="inner">
			<h2>Menu</h2>
			<ul class="links">
				<li><input type="text" name="query" placeholder="Search" /><li>
				<li><a href="index.html">Home</a></li>
				<li><a href="generic.html">Convocatorias</a></li>
				<li><a href="elements.html">Eventos</a></li>
				<li><a href="#">Revistas</a></li>
				<li><a href="#">Ingresar</a></li>
				<li><a href="#">Registrarse</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
			<a href="#" class="close">Close</a>
		</div>
	</nav>





	@yield('content')

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

	</div>

<div>

</div>

<!-- Scripts -->
<script src="js/skel.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollex.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>