@extends('layouts.app')

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<header>
					<center><h2>CONFIGURAR CUENTA</h2></center>			
				</header>
			</div>
			<!-- Content -->
			<div class="12u 12u(mobile)">
				<section class="box">
					<h3 class="major">Registro</h3>
					<hr>
					<form method="post" class="form login-form">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<label for="demo-name">Telefono</label>
								<input type="text" name="demo-name" id="demo-name" class="form-control"/>
							</div>
							<div class="6u 12u$(xsmall)">
								<label for="demo-name">Usuario</label>
								<input type="text" name="demo-name" id="demo-name" value="" />
							</div>
							<div class="12u$">
								<label for="demo-email">Correo Electrónico</label>
								<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" name="demo-email" id="demo-email" class="form-control" />
							</div>
							</div>
							<div class="6u 12u$(xsmall)">
								<label for="demo-name">Contraseña</label>
								<input type="password" name="demo-name" id="demo-name" value="" />
							</div>
							<div class="6u 12u$(xsmall)">
								<label for="demo-name">Confirmar contraseña</label>
								<input type="password" name="demo-name" id="demo-name" value="" />
							</div>
							<div class="6u 12u$(small)">
								<label class="checkbox inline"></label><input type="checkbox" id="demo-copy" name="demo-copy"> Acepto términos y condiciones</label>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><a href="index.html" class="button special icon fa-user-plus">Crear</a></li>
								</ul>
							</div>
						</div>
					</form>
				
				</section>
			</div>
		</div>
	</div>
</div>

@stop