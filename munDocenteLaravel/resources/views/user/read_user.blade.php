@extends('layouts.routes.downtwice')

@section('menus')

     <li class="current"><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
	<li ><a href="/university">
<i class="glyphicon glyphicon-ok-sign"></i> Universidades o Instituciones Academicas</a></li>

@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">

 			<!-- SECCION PARA EL NOMBRE DE LA CONFIGURACION DEPENDIENDO EL USUARIO
 			@yield('name')
 			-->
 
			<div class="12u 12u(mobile)">
				<header>
					<center><h2 class="config">{{ $user->fullname }}</h2></center>			
				</header>
			</div>

			<div class="2u 12u(mobile)"></div>

			<!-- Content -->
			<div class="8u 12u(mobile)">
				<section class="box">
		
					<div class="row uniform">
						<div class="12u 12u$(xsmall)">
							<div class="form-group">
							@if($user->photo != null)
							<center>
								<img class="control-label col-xs-3" src="{{url('uploads/photo/'.$user->id.'/'.$user->photo)}}" alt="" />
							</center>
							@else
							</center>
								<img class="control-label col-xs-3" src="{{url('images/user.png')}}" alt="" />
							</center>
							@endif
							<label class="control-label col-xs-4"><h2>{{ $user->username }} </h2></label>
							@if($user->activedAdmin == 0)
						   		<ul class="nav navbar-nav navbar-right">
						        <a href="/actived_admin/{{ $user->id }}"><button type="button" href="/manage_users" name="activateUser" class="btn btn-success">Activar 
						   		<i class="glyphicon glyphicon-ok-circle"></i></button></a>
						   		<a href=""><button type="button" href="" name="editUser" class="btn btn-primary">Editar 
						   		<i class="glyphicon glyphicon-edit"></i></button></a>
								</ul>
						   	@else
						   	<ul class="nav navbar-nav navbar-right">
						    	<a href="/desactived_admin/{{ $user->id }}"><button type="button" name="inactivateUser" class="btn btn-danger">Inactivar 
						   		<i class="glyphicon glyphicon-remove-circle"></i></button></a>
						   		</ul>
						   	@endif
							</div>
						</div>
						<div class="12u 12u$(xsmall)">
							<div class="form-group">
							<label class="control-label col-xs-4">Nombres y Apellidos</label>
							<label class="control-label col-xs-8">{{ $user->fullname }}</label>
							</div>
						</div>
						<div class="12u$">
							<div class="form-group">
							<label class="control-label col-xs-4">Correo Electrónico</label>
							<label class="control-label col-xs-8">{{ $user->email }}</label>
		                	</div>
						</div>
						<div class="12u$">
							<div class="form-group">
							<label class="control-label col-xs-4">Institución</label>
							<label class="control-label col-xs-8">{{ $user->academicInstitution->name}}</label>
							</div>
						</div>
						<div class="12u 12u$(xsmall)">
							<div class="form-group">
							<label class="control-label col-xs-4">Celular</label>
							@if($user->phone != null)
							<label class="control-label col-xs-8">{{ $user->phone }}</label>
							@endif
							</div>
						</div>
						<div class="12u 12u$(xsmall)">
							<div class="form-group">
							<label class="control-label col-xs-4">Contacto</label>
							@if($user->contact != null)
							<label class="control-label col-xs-8">{{ $user->contact }}</label>
							@endif
						</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection