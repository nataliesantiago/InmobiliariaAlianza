@extends('layouts.routes.normalroute')

@section('menu')

    @yield('menu')

@stop

@section('principal')
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                    <!-- Sidebar -->
                @if (Auth::guest())  
                <div class="4u 12u(mobile)">  
                    @yield('login')
                </div>
               
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                          <article class="box post">
                            <a class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <div class="information">
                                @yield('content')
                            </div>
                        </article>

                </div>
                @else
                 <div class="4u 12u(mobile)">                   
                    @yield('area')
                 </div>
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                          <article class="box post">
                            <a class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <div class="information">
                                @yield('content')
                            </div>
                        </article>

                </div>
                @endif

            </div>
        </div>
    </div>
@stop