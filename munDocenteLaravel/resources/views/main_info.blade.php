@extends('layouts.routes.normalroute')

@section('menus')

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
                                @yield('content')
                        </article>

                </div>
                @else
                 <div class="4u 12u(mobile)">                   
                    @yield('area')
                 </div>
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                          <article class="box post">
                                @yield('content')
                        </article>

                </div>
                @endif

            </div>
        </div>
    </div>
@stop