<!DOCTYPE HTML>
<!--
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Mundocente</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @yield('links')

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
                                 <div class="10u 12u$(xsmall)">
                                @yield('logo')
                            </div>
                        </div>
                        <div class="5u 12u(mobile)">
                        </div>              
                        <div class="5u 12u(mobile)">
                            <form action="{{ url('result_search_basic')}}" method="post" class="form login-form">
                            {!! csrf_field() !!}
                            <div class="row uniform">

                                 <div class="1u 12u$(xsmall)"></div>
                                 <div class="8u 12u$(xsmall)">
                                    <input type="text" name="query"  placeholder="Búsqueda" />
                                    @if ($errors->has('query'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('query') }}</strong>
                                            </span>
                                    @endif
                                    @if (Auth::guest())
                                    @else   
                                    <a href="/search_advanced">Búsqueda avanzada</a>
                                    @endif
                                </div>

                                <div class="2u 12u$(xsmall)">
                                    <input class="btnSearch btn-default" type="submit" value="Ir">
                                </div>
                            </div>

                            </form>             
                        </div>
                    </div>
                  
                    <div>
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">                            
                            @yield('menu')
                            <li style="white-space: nowrap;">
                                <a href="#footer-wrapper">
                                    <i class="glyphicon glyphicon-info-sign"></i> Contacto
                                </a>
                            </li>                                 
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                           
                                <li class="white-space: nowrap;">
                                    <a href="/user/create_docent"><i class="glyphicon glyphicon-user"> </i>  Registrarse</a>
                                </li>
                            @else
                                <li class="dropdown">
                                   
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                                        {{ Auth::user()->username }} 
                                        <img class="imguser col-xs-3" src="images/user.png" alt="" > 
                                        <span class="caret"></span>
                                        </a>

                                    <ul class="dropdown-menu" role="menu">
                                    <!--<a href="/setting_account/{{ Auth::user()->id }}">-->
                                    <li><a href="{{ route('user.edit', Auth::user()->id) }}"><i class="glyphicon glyphicon-cog"></i>Configuración</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                                                       
                                    </ul>
                                
                                </li>
                            @endif
                            @yield('intro')   
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    <!-- Nav OCURRE LO MISMO -->
    </div>    
       

@yield('principal')

<!-- Footer DIVIDIR APARTIR DE AQUI-->
    <div id="footer-wrapper">
        <section id="footer" class="container">
            <div class="row">
                <div class="6u 12u(mobile)">
                    <section>
                        <header>                
                            <h2 class="major">Contacto</h2>
                        </header>
                       <ul class="social">
                            <li><a class="icon fa-facebook" href="https://www.facebook.com/mundocente/?fref=ts"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="https://twitter.com/mundocente"><span class="label">Twitter</span></a></li>
                         </ul>
                        <ul class="contact">
                            <li>
                                <h3>Dirección</h3>
                                <p>
                                    Calle 18 # 7-43 Tunja/Boyacá
                                </p>
                            </li>
                            <li>
                                <h3>Email</h3>
                                <p><a href="#">mundocente@mundocente.com</a></p>
                            </li>
                            <li>
                                <h3>Teléfono</h3>
                                <p>(800) 000-0000</p>
                            </li>
                            <br>
                            <p style="text-align: center;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d717.9141082609934!2d-73.36008869887702!3d5.530217782425579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7dd297720937%3A0xae08a35864347103!2sCl.+18+%237-43%2C+Tunja%2C+Boyac%C3%A1!5e1!3m2!1ses!2sco!4v1460131644457" width=auto height=auto frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                        </ul>
                    </section>
                </div> 
                <div class="6u 12u(mobile)">
                    <header>
                        <h2 class="major">Sugerencias</h2>
                    </header>           
                    <form method="post" action="#">
                        <div class="field">
                            <h7>Nombre</h7>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <h7>Email</h7>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="field">
                            <h7>Mensaje</h7>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                        <br>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar mensaje" /></li>
                        </ul>

                    </form>
                </div>
                
            </div>
            <div class="row">
                <div class="12u">

                    <!-- Copyright -->
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; Copyright 2016</li><li>Diseño: <a href="https://www.facebook.com/mundocente/?fref=ts">MunDocente</a></li>
                            </ul>
                        </div>

                </div>
            </div>
        </section>
    </div>

</div>

<!-- Scripts -->
@yield('scripts')


</body>
</html>