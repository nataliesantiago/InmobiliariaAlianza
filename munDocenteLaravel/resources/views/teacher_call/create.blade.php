@extends('layouts.routes.routedown')

@section('menus')

	  <li ><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
    	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
    	<i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
    	<i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
		<center><h2 class="count">AGREGAR CONVOCATORIAS DOCENTES</h2></center>			
	</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				@yield('alert')

				<section class="box">
					<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
				
					<hr>
					<div class="row uniform">
				
				{!! Form::open(['id' => 'valForm','route' => 'teacher_call.store', 'method' => 'POST']) !!}
			         {!! csrf_field() !!}
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la convocatoria docente *" required  name="name" value="{{ old('name') }}" >
			                    </div>		
			            	</div>
			            </div>
			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control" name="date_publication" placeholder="Fecha de publicación *" id="datePublication" required value="{{ old('date_publication') }}">
			                    	
			                    </div>	
			            	</div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
			                    	<input type="text" required class="form-control" placeholder="URL *" name="url" >
			                    </div>		
			                    
			                </div>
			            </div>
			           
			             <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control" name="start_date" placeholder="Fecha de inicio *" id="dateInit" required value="{{ old('start_date') }}">			                
			                    </div>	
			                  
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control" name="end_date" placeholder="Fecha fin *" id="dateEnd" required value="{{ old('end_date') }}">
			                    	
			                    </div>				                  
			                </div>
			            </div>
						
						<div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
			                    	<input type="text" class="form-control" placeholder="Cargo *" required name="position" value="{{ old('position') }}">
			                    </div>		
			                    
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" placeholder="Descripción *" name="description" required value="{{ old('description') }}" >
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
