@extends('layouts.routes.downtwice')

@section('menus')

    @include('menus.empty')

@stop

@section('principal')
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                    <!-- Sidebar -->
                @if (Auth::guest())  
                <div class="4u 12u(mobile)">  
                    @include('auth.login')
                </div>
               
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                          <article class="box post">
                                 <h4>No se han encontrado publicaciones</h4>

                        </article>

                </div>
                @else
                 <div class="4u 12u(mobile)">                   
                    @include('areas')

                 </div>
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                          <article class="box post">
                             <h4>No se han encontrado publicaciones</h4>

                        </article>

                </div>
                @endif

            </div>
        </div>
    </div>
@stop



