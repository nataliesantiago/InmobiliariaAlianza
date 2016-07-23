@extends('layouts.routes.downtwice')

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
				<center><h2 class="count">EDITAR UNIVERSIDAD O INSTITUCION ACADEMICA</h2></center>			
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
					
				<section class="box">
		            @if(Session::has('flash_message'))
   					 <div class="alert alert-success">
      				  {{ Session::get('flash_message') }}
  					  </div>
					@endif

			   		<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
				
					<hr>
			        <div class="row uniform">
			        	 {!! Form::model($academic_institution, [
							'id' => 'valForm',
		    				'method' => 'PATCH',
							 'route' => ['university.update', $academic_institution->id]
						]) !!}
			        {!! csrf_field() !!}
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la universidad o institucion *" name="name" value="{{ $academic_institution->name }}">
			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			                    	<select class="form-control" name="type">
			                    		<option>{{ $my_type->value }}</option>
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
			                    	<input type="text" class="form-control" required placeholder="Correo electronico *" name="email" value="{{ $academic_institution->email }}" >
			                    </div>		
			                    
			                </div>
			            </div>
			           
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" >
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			                    	<input type="text" class="form-control" name="phone" placeholder="Telefono *" value="{{ $academic_institution->phone }}" >

			                    	
			                    </div>	
			                  
			                </div>
			            </div>


			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" placeholder="Descripción " name="description" value="{{ $academic_institution->description }}">

			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			                    	<select class="form-control" name="city"> 
			                    		<option>{{ $my_place->name }}</option>            
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
			                        EDITAR
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