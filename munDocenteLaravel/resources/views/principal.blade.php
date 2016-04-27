@extends('layouts.app')

@section('principal')
<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
            @if (Auth::guest())    
               @yield('login')
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
                        </div>
                    </section>
                  <div class="information">
                @yield('content')
                    </div>
                </div>

            @else    
                <div class="12u 12u(mobile)">
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