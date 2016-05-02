
@extends('layouts.private')

@section('menu')

    <li class="current"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('principal_info')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<header>
					<center><h2 class="config">CONFIGURAR CUENTA</h2></center>			
				</header>
			</div>
			<div class="2u 12u(mobile)"></div>

			<!-- Content -->
			<div class="8u 12u(mobile)">
				<section class="box">
					<form method="post" class="form login-form">
						@foreach($user as $r)
						<div class="row uniform">
							<div class="12u 12u$(xsmall)">	
								<label class="control-label col-xs-4"><h2>{{ $r->username }} </h2></label>
								<div class="col-xs-8">
								<a class="forgot btn-link" href="#">Cambiar contraseña</a>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<img class="control-label col-xs-3" src="../images/user.png" alt="" />
								<div class="col-xs-1"></div>
								<div class="col-xs-8">
								<a class="forgot btn-link" href="#">Cambiar foto</a>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Nombres y Apellidos</label>
								<div class="col-xs-8">
								<input type="text" name="demo-name" id="demo-name" placeholder="{{ $r->fullname }}" />
								</div>
							</div>
							<div class="12u$">
								<label class="control-label col-xs-4">Correo Electrónico</label>
								<div class="col-xs-8">
								<input type="text" name="demo-email" id="demo-email" class="form-control" placeholder="{{ $r->email }}" />
								</div>
								@if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
							</div>
							<div class="12u$">
								<label class="control-label col-xs-4">Institución</label>
								<div class="col-xs-8">
								<select name="demo-ins" id="demo-ins" class="form-control" />
									<option>{{ $r->academicInstitution->name}}</option>
								</select>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Áreas de interés</label>
						      	<div class="col-xs-8" id="listArea">
						        <div  class="input-group">
									<select class="form-control" required name="area[]">             
						        		<option name>Seleccione una opción</option>
										<option>Software</option>
										<option>Educación</option>
										<option>Web</option>
										<option>Inglés</option>
										<option>Matemáticas</option>
										<option>Ingeniería</option>
										<option>Medicina</option>
									</select>
								    <span class="input-group-btn input-m">
						            <button class= "btn btn-primary" onclick="crearArea(this)"><i class="glyphicon glyphicon-plus"></i></button>
						          	</span>
						     	</div>
						     	</div> 
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Telefono</label>
								<div class="col-xs-8">
								<input type="text" name="demo-phone" id="demo-phone" value="" />
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Contacto</label>
								<div class="col-xs-8">
								<textarea name="contact" id="contact" rows="4" value="">
								</textarea>
								</div>
							</div>
							<div class="12u$">
								<ul class="actions">
									<center>
										<li><button type="submit" class="button big special icon fa-save">
			                        		Guardar
			                    		</button></li>
										<li><a href="/" class="button alt2 special icon fa-power-off">Desactivar cuenta</a></li>
										<li><a href="/" class="button alt special icon fa-close">Cancelar</a></li>
									</center>
								</ul>
							</div>
						</div>
						@endforeach
					</form>
				
				</section>
			</div>
		</div>
	</div>
</div>
@endsection