@extends('layouts.routes.downtwice')

@section('menus')

    <li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
    <li class="current"><a href="/own_publications">
		<i class="glyphicon glyphicon-education"></i> Mis publicaciones</a></li>       
	<li><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li><a href="/manage_publications">
		<i class="glyphicon glyphicon-education"></i> Administrar Publicaciones</a></li>


@stop

@section('principal')
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                    <!-- Sidebar -->
                <div class="2u 12u(mobile) important(mobile)">
                </div>	
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                    <article class="box post">
                           @include('publication.box_publication')
                    </article>

                </div>

            </div>
        </div>
    </div>
@stop