@extends('layouts.routes.routedown')

@section('menus')

	
     <li><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
		<li ><a href="/university">
<i class="glyphicon glyphicon-education"></i> Universidades o Instituciones Academicas</a></li>

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<center><h2 class="count">AGREGAR UNIVERSIDAD O INSTITUCIÓN ACADÉMICA</h2></center>			
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
					
				<section class="box">
		            

			   		<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
				
					<hr>
			        <div class="row uniform">
			        {!! Form::open(['id' => 'valForm','route' => 'university.store', 'method' => 'POST']) !!}
			        {!! csrf_field() !!}
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la universidad o institución *" name="name" value="{{ old('name') }}">
			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			                    	<select class="form-control" name="type">             
										@foreach($type_universitys as $type)
										<option>{{ $type->value }}</option>
										@endforeach
									</select>
			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			                    	<input type="text" class="form-control" required placeholder="Correo electrónico *" name="email" value="{{ old('email') }}" >
			                    </div>		
			                    
			                </div>
			            </div>
			           
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" >
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			                    	<input type="text" class="form-control" name="phone" placeholder="Teléfono *" value="{{ old('phone') }}" >

			                    	
			                    </div>	
			                  
			                </div>
			            </div>


			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" placeholder="Descripción " name="description" value="{{ old('description') }}">

			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			                    	<select class="form-control" name="city">             
										@foreach($places as $place)
										<option>{{ $place->name }}</option>
										@endforeach
									</select>
			                    </div>		
			                    
			                </div>
			            </div>

			             

			            <br>
			            <center class="btnregis"><div class="form-group">
			                <div class="12u$">
			                    <button type="submit" class="button special">
			                        Agregar
			                    </button>
			                </div>
			            </div></center>
			        {!! Form::close() !!}

			        </div>			    
			    </section>
			</div>
        </div>
    </div>
</div>


@endsection
