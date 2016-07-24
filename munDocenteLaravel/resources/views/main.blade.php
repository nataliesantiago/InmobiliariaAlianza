@extends('layouts.routes.normalroute')

@section('menus')
  
  @yield('menu')

@stop

@section('principal')
<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
            
            @if (Auth::guest())
             <div class="4u 12u(mobile)">    
               @yield('login')
               @yield('area')
               </div>
               
                <div class="8u 12u(mobile)">
                    <article class="box post">
                         <div id = "slider">
                            <div class ="elemento">
                                <img src="images/img1.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img2.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img3.png">
                            </div>
                             <div class ="elemento">
                                <img src="images/img4.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img6.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img7.png">
                            </div>
                        </div>
                        <br>

                        @yield('content')
  
                    </article>
      
                </div>
              
            @else   
            <div class="4u 12u(mobile)">    
               
               @yield('area')
               </div>

                <div class="8u 12u(mobile)">
                    <article class="box post">
                         <div id = "slider">
                            <div class ="elemento">
                                <img src="images/img1.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img2.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img3.png">
                            </div>
                             <div class ="elemento">
                                <img src="images/img4.png">
                            </div>
                            <div class ="elemento">
                                <img src="images/img6.png">
                            </div>
                              <div class ="elemento">
                                <img src="images/img7.png">
                            </div>
                        </div>
                        @yield('content')
                    </article>


                </div>

            @endif


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