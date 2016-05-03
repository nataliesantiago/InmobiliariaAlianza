@extends('layouts.routes.routedown')

@section('menu')

	<li style="white-space: nowrap;"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
					<center><h2 class="count">NUEVA CUENTA</h2></center>			
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				<section class="box">
					<h3 class="major">Registro</h3><hr>
			        <form class="form login-form" role="form" method="POST" action="{{ url('/register') }}">
			            {!! csrf_field() !!}

			        <div class="row uniform">
			            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" value="{{ old('username') }}">
			                    </div>		
			                    @if ($errors->has('username'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('username') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-info"></i></span>
			                    	<input type="text" class="form-control" name="fullname" placeholder="Nombres y apellidos" value="{{ old('fullname') }}">
			                    </div>	
			                    @if ($errors->has('fullname'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('fullname') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			                    	<input type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}">
			                	</div>
			                    @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			                      	<input type="password" class="form-control" placeholder="Contraseña" name="password">
			                    </div> 	
			                    @if ($errors->has('password'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('password') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				                    <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation">
				                </div>    
			                    @if ($errors->has('password_confirmation'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('password_confirmation') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <input type="hidden" name="type" value="1">

			            <div class="col-xs-8">
								<select name="academic_institution" id="ins" class="form-control" />
								@foreach($academic_institutions as $academic_institution)
									<option>{{ $academic_institution->name }}</option>
								@endforeach
								</select>
						</div>


						<div class="12u 12u$(small)">
							<center>
								<label class="checkbox inline"></label><input type="checkbox" id="demo-copy" name="demo-copy"> Acepto términos y condiciones</label>
							</center>
						</div>

			            <center class="btnregis"><div class="form-group">
			                <div class="12u$">
			                    <button type="submit" class="button special icon fa-user-plus">
			                        Registrarse
			                    </button>
			                </div>
			            </div></center>
			        </div>
			        </form>
			    </section>
			</div>
        </div>
    </div>
</div>
@endsection


