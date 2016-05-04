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
                                <img src="images/img5.png">
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
                                <img src="images/img5.png">
                            </div>
                              <div class ="elemento">
                                <img src="images/img6.png">
                            </div>
                              <div class ="elemento">
                                <img src="images/img7.png">
                            </div>
                        </div>
                    </section>
                  <div class="information">
                @yield('content')
                    </div>

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
                        <p>Acá podrá encontrar todas las publicaciones relacionadas a convocatorias de docentes universitarios.</p>
                        <br>
                        <a href="/teacher_call" class="button big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="middle">
                        <i class="icon featured alt fa-edit"></i>
                        <header>
                            <h2>Revistas científicas</h2>
                        </header>
                        <p>Acá podrá encontrar todas las publicaciones relacionadas a las revistas científicas indexadas en Colombia.</p>
                        <br>
                        <a href="/scientific_magazine" class="button alt big">Ver más</a>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="last">
                        <i class="icon featured alt2 fa-graduation-cap"></i>
                        <header>
                            <h2>Eventos académicos</h2>
                        </header>
                        <p>Acá podrá encontrar todas las publicaciones relacionadas con eventos académicos en Colombia.</p>
                        <br>
                        <a href="/academic_event" class="button alt2 big">Ver más</a>
                    </section>
                </div>
            </div>
        </section>

    </div>
</div>
@stop