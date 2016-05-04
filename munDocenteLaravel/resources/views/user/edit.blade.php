
@extends('layouts.routes.downtwice')

@section('menus')

    <li class="current"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('principal')

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

				@if(Session::has('flash_message'))
   					 <div class="alert alert-success">
      				  {{ Session::get('flash_message') }}
  					  </div>
				@endif
				@foreach($user as $r)
				@can('owner', $r)
					{!! Form::model($r, [
    				'method' => 'PATCH',
					 'route' => ['user.update', $r->id]
					]) !!}
						<div class="row uniform">
							<div class="12u 12u$(xsmall)">	
								<label class="control-label col-xs-4"><h2>{{ $r->username }} </h2></label>
								<div class="col-xs-8">
								<a class="forgot btn-link" href="#">Cambiar contraseña</a>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<img class="control-label col-xs-3" src="../../images/user.png" alt="" />
								<div class="col-xs-1"></div>
								<div class="col-xs-8">
								<a class="forgot btn-link" href="#">Cambiar foto</a>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Nombres y Apellidos</label>
								<div class="col-xs-8">
								<input type="text" name="fullname" value="{{ $r->fullname }}" />
								</div>
							</div>
							<div class="12u$">
								<label class="control-label col-xs-4">Correo Electrónico</label>
								<div class="col-xs-8">
								<input type="email" name="email" class="form-control" value="{{ $r->email }}" />
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
								<select name="academic_institution" class="form-control" />
									<option>{{ $r->academicInstitution->name}}</option>
									@foreach($academic_institutions as $academic_institution)
									@if($r->academicInstitution->name != $academic_institution->name)
									<option>{{ $academic_institution->name }}</option>
									@endif
									@endforeach
								</select>
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Áreas de interés</label>
						      	<div class="col-xs-8" id="listArea">
						        <div  class="input-group">
									<select class="form-control" required name="area[]">             
						        		@foreach($areas as $area)
										<option>{{ $area->name }}</option>
										@endforeach
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
								@if($r->phone == null)
								<input type="text" name="phone" placeholder="Ingresa tú número telefónico" />
								@else
								<input type="text" name="phone" value="{{ $r->phone }}" />
								@endif
								</div>
							</div>
							<div class="12u 12u$(xsmall)">
								<label class="control-label col-xs-4">Contacto</label>
								<div class="col-xs-8">
								@if($r->contact == null)
								<textarea name="contact" rows="4"></textarea>
								@else
								<textarea name="contact" rows="4">{{ $r->contact }}</textarea>
								@endif
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
					{!! Form::close() !!}	
					</form>
					@endcan
					<body>
					        <div class="container">
					            <div class="content">
					                <div class="title">¿Hasta dónde intentas llegar {{ $r->fullname }}? 
					                Aquí enuentras información no autorizada</div>
					            </div>
					        </div>
					    </body>
				@endforeach
				</section>
			</div>
		</div>
	</div>
</div>
@endsection