@extends('layouts.routes.normalroute')

@section('menus')

    <li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
    <li class="current"><a href="/own_publications">
		<i class="glyphicon glyphicon-folder-open"></i> Mis publicaciones</a></li>       
	<li><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li><a href="/manage_publications">
		<i class="glyphicon glyphicon-wrench"></i> Administrar publicaciones</a></li>


@stop

@section('principal')
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                    <!-- Sidebar -->
                @if (Auth::guest())  
                @else
                <div class="2u 12u(mobile) important(mobile)">
                </div>	
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                    <article class="box post">
                           @include('publication.box_publication')
                    </article>

                </div>
                @endif

            </div>
        </div>
    </div>
@stop