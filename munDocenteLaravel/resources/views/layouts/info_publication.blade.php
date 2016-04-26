<!DOCTYPE HTML>
<!--
Dopetrope by HTML5 UP
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Mundocente</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap-responsive.min.css" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="right-sidebar">
<div id="page-wrapper">

<!-- Header -->
    <div id="header-wrapper">
        <div id="header">
            <!-- Nav -->
                 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
             <div class="row">
                <div class="2u 12u(mobile)">
                    <a href="/"><img  src="images/logo.jpg"></a>
                </div>
                <div class="8u 12u(mobile)">
                </div>              
                <div class="2u 12u(mobile)">
                    <form class="form login-form">
                        <input type="text" name="query" placeholder="Búsqueda" />

                        <a href="#">Búsqueda avanzada</a>
                        <br>
                    </form>
                </div>
            </div>

            <div class="formu navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    

                        <li class="current"><a href="/">Home</a></li>
                        <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
                        <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
                        <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

                    
               
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                   
                        <li class="register"><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-cog"></i>Configuracion</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                                               
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


        </div>
            <!-- Nav -->
        </div>      
        </div>

			<!-- Main -->
                <div id="main-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="8u 12u(mobile)">

                                <!-- Content -->
                                    <article class="box post">
                                        <a class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                        <div class="information">
                                            @yield('content')
                                        </div>
                                    </article>

                            </div>

                            @yield('login')

                          

                        </div>
                    </div>
                </div>
	
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/skel-viewport.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

	</body>
</html>