@extends('layouts.routes.normalroute')

@section('menus')

    <li class="current"><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>


@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">ACTIVAR PUBLICADORES</h2></center>			
			</div>
			<div class="3u 12u(mobile)"></div>

			<div class="6u 12u(mobile)">
				<section class="box">
				<!-- Aqui va el foreach -->
				@foreach($users as $user)
			    <div>
			    <a class="forgot btn-link" href="{{ route('user.show', $user->id) }}">{{ $user->fullname }}</a>
			   	@if($user->activedAdmin == 0)
			   		<ul class="nav navbar-nav navbar-right">
			        <a href="/actived_admin/{{ $user->id }}"><button type="button" href="/manage_users" name="activateUser" class="btn btn-success">Activar 
			   		<i class="glyphicon glyphicon-ok-circle"></i></button></a>
					</ul>
			   	@else
			   	<ul class="nav navbar-nav navbar-right">
			    	<a href="/desactived_admin/{{ $user->id }}"><button type="button" name="inactivateUser" class="btn btn-danger">Inactivar 
			   		<i class="glyphicon glyphicon-remove-circle"></i></button></a>
			   		</ul>
			   	@endif
			    </div>
			    <br>
			    @endforeach

			    </section>
			</div>
        </div>
    </div>
</div>

@stop