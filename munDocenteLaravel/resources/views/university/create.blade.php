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
				<center><h2 class="count">AGREGAR UNIVERSIDAD O INSTITUCION ACADEMICA</h2></center>			
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
					
				<section class="box">
		            

			   		<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
				
					<hr>
			        <div class="row uniform">
			        	
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la universidad o institucion *" name="name_university">
			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			                    	<input type="text" class="form-control" required placeholder="Correo electronico *" name="email_university" >
			                    </div>		
			                    
			                </div>
			            </div>
			           
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			                    	<input type="text" class="form-control" name="start_date" placeholder="Telefono *" id="dateInit" value="{{ old('start_date') }}" >

			                    	
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
			        </div>
			     
			    
			    </section>
			</div>
        </div>
    </div>
</div>


@endsection
