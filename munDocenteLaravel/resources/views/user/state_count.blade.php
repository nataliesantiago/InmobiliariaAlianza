@extends('layouts.routes.downtwice')
@section('menus')

    <li class="current"><a href="/admin">
        <i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>


@stop
@section('principal')
<div id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u 12u(mobile)">
    </div>
            <div class="2u 12u(mobile)"></div>

            <div class="8u 12u(mobile)">
                @yield('alert')

                <section class="box">

                @if(Session::has('flash_message'))
                     <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                      </div>
                @endif

                @if($user->activedAdmin == 0)
                    <center><h1>Cuenta desactivada correctamente</h1></center> 
                @else
                    <center> <h1>Cuenta activada correctamente</h1> </center> 
                @endif
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
