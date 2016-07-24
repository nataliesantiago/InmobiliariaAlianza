@extends('layouts.routes.routedown')

@section('menus')

@if (Auth::guest())
	 <li ><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
    	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
    	<i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
    	<i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>
@else
@if(Auth::user()->type==3)
<li ><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
		<li ><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades o Instituciones Académicas</a></li>
		@endif
@endif

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			@yield('name')
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				<section class="box">

						<div class="btn-group">
  						 <button type="button" class="btn btn-info">Tipo de Usuario</button>
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
 						 <ul class="dropdown-menu" role="menu">
					    <li><a href="/user/create_docent">Docente</a></li>
					    <li><a href="/user/create_publisher">Publicador</a></li>
					     </ul>
						</div>
						<p>Campos obligatorios *</p>
					
				
					<hr>
			        <form id="valForm" class="form login-form" role="form" method="POST" action="{{ url('/register') }}">
			            {!! csrf_field() !!}

			        <div class="row uniform">
			            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
		                    <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                    	<input type="text" class="form-control" placeholder="Nombre de usuario *" name="username" value="{{ old('username') }}">
		                    </div>
		                    @if ($errors->has('username'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('username') }}</strong>
		                        </span>
			                @endif
			            </div>

			            <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
		                    <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		                    	<input type="text" class="form-control" name="fullname" placeholder="Nombres y apellidos *" value="{{ old('fullname') }}">
		                    </div>
		                    @if ($errors->has('fullname'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('fullname') }}</strong>
		                        </span>
			                @endif
			            </div>

			            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                <div class="12u$(xsmall)">
			                	<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			                    	<input type="email" class="form-control" placeholder="Correo electrónico *" name="email" value="{{ old('email') }}">
			                	</div>
			                    @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		                      	<input type="password" class="form-control" placeholder="Contraseña *" name="password">
		                    </div>
		                    @if ($errors->has('password'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('password') }}</strong>
		                        </span>
			                @endif 	
			            </div>


			            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		                	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			                    <input type="password" class="form-control" placeholder="Confirmar contraseña *" name="password_confirmation">
			                </div>    
		                    @if ($errors->has('password_confirmation'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('password_confirmation') }}</strong>
		                        </span>
			                @endif
			            </div>



			            <div class="col-xs-12">
			            	<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>				              
								<select name="academic_institution" id="ins" class="form-control" />
								@foreach($academic_institutions as $academic_institution)
									<option>{{ $academic_institution->name }} </option>
								@endforeach
								</select>
							</div>
						</div>

						@yield('interes')
						
						@yield('notification_mail')
						
						@yield('type_publisher')
						
						

						<div class="12u 12u$(small)">
							<center>
								<label class="checkbox inline">
									<input type="checkbox" name="termsConditions"> Acepto términos y condiciones *
								 @if ($errors->has('termsConditions'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('termsConditions') }}</strong>
			                        </span>
			                    @endif
			                    </label>
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
