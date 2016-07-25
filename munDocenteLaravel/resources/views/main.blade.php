@extends('layouts.routes.normalroute')

@section('menus')
  
  @yield('menu')

@stop

@section('principal')
<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
            
            @if (! Auth::guest())
                @if(Auth::user()->type==2)
                <div class="12u 12u(mobile)">
                    @if(Auth::user()->activedAdmin != 0)
                    <div class="alert alert-info alert-dismissible" role="alert">
                      <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      ¡Bienvenido!</h4>&nbsp;&nbsp;&nbsp;Aquí se muestran todas las publicaciones vigentes, si quiere modificar alguna de sus publicaciones diríjase a la pestaña que corresponda según el tipo de actividad. 
                    </div>      
                    @else
                    <div class="alert alert-warning alert-dismissible" role="alert">
                      <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Cuenta desactivada</h4>&nbsp;&nbsp;&nbsp;Estamos procesando su solicitud. 
                    </div>
                    @endif
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Consultas</h4>&nbsp;&nbsp;&nbsp;Puede informarse acerca de las publicaciones actuales y realizar búsquedas como docente, a través del campo de búsqueda, la búsqueda avanzada o el panel de áreas. 
                    </div>
                </div>
                @endif
              @endif

             <div class="4u 12u(mobile)">
             @if (Auth::guest())     
               @yield('login')
               @yield('area')
             @else
               @yield('area')
             @endif
               </div>
               
                <div class="8u 12u(mobile)">
                    <article class="box post">
                         <div id="slider" class="carousel slide" >
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="item1 active"></li>
                                <li class="item2"></li>
                                <li class="item3"></li>
                                <li class="item4"></li>
                                <li class="item5"></li>
                                <li class="item6"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class ="item active">
                                    <img src="images/img1.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img3.png">
                                </div>
                                 <div class ="item">
                                    <img src="images/img4.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img2.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img6.png">
                                </div>
                                <div class ="item">
                                    <img src="images/img7.png">
                                </div>
                            </div>

                             <a class="left carousel-control" href="#slider" role="button">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slider" role="button">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br>

                        @yield('content')
  
                    </article>
      
                </div>
            </div>
        </div>
    </div>

    <div id="header-wrapper">
    <div id="header">
                <!-- Intro -->
        <section id="intro" class="container">
            <div class="row">
                <div class="4u 12u(mobile)">
                    <section class="first">
                        <i class="icon featured fa-suitcase"></i>
                        <header>
                            <h2>Convocatorias docente</h2>
                        </header>
                        <p>Entérate oportunamente sobre las oportunidades laborales del ámbito universitario y cumple con tus metas de crecimiento profesional.</p>
                        <br>
                        <a href="/teacher_call" class="button big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="middle">
                        <i class="icon featured alt fa-book"></i>
                        <header>
                            <h2>Revistas científicas</h2>
                        </header>
                        <p>Ahorra tiempo conociendo las revistas científicas que a la fecha reciben artículos de tu área de interés.</p>
                        <br>
                        <a href="/scientific_magazine" class="button alt big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="last">
                        <i class="icon featured alt2 fa-bullhorn"></i>
                        <header>
                            <h2>Eventos académicos</h2>
                        </header>
                        <p>Encuentra congresos, seminarios, conferencias y demás eventos académicos de tu interés para capacitación o presentación de tus resultados de investigación.</p>
                        <br>
                        <a href="/academic_event" class="button alt2 big">Ver más</a>
                    </section>
                </div>
            </div>
        </section>

    </div>
</div>
@stop