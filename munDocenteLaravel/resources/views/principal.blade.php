@extends('layouts.app')

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
@stop