<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Sin definir-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>

@extends('layouts.routes.downtwice')

@section('menus')

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
				<center><h2 class="count">EDITAR EVENTO ACADÉMICO</h2></center>			
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

			        	{!! Form::model($publication, [
						'id' => 'valForm',
	    				'method' => 'PATCH',
						 'route' => ['academic_event.update', $publication->id]
						]) !!}

						{!! csrf_field() !!}

			            <div class="form-group">
			            <label >Nombre del evento académico</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" name="name" value="{{$publication->name}}">
			                    </div>		
			                    
			                </div>
			            </div>


			           <div class="form-group">
			           <label>URL</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
			                    	<input type="text" class="form-control" name="url" value="{{$publication->url}}">
			                    </div>		
			                    
			                </div>
			            </div>

			         		           
			             <div class="form-group">
			             <label>Fecha de inicio</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control" name="start_date" id="dateInit" value="{{$publication->start_date}}">
			                    </div>	
			                </div>
			            </div>


			             <div class="form-group">
			             <label>Fecha fin</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control"  name="end_date" id="dateEnd" value="{{$publication->end_date}}">
			                    	
			                    </div>				                  
			                </div>
			            </div>

			            <div class="form-group">
			            	<div class="12u$(xsmall)">
								
								<a class="control-label col-xs-1" 
							    href="javascript:crearArea('<?php echo implode($arrayArea) ?>'.split('-'))" >
							    	<i class="glyphicon glyphicon-plus"></i>
							    </a>
						        <h4>Áreas de interés</h4>
						      	<div id="listArea" class="input-group">
						      		<span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
						      		@foreach($publication->areas as $area)
						      		<select class="form-control" required name="area[]">             
										<option>{{ $area->name }}</option>
										@foreach($areas as $areaAdd)
											@if($area->name != $areaAdd->name)
											<option>{{ $areaAdd->name }}</option>
											@endif
										@endforeach
									</select>
									@endforeach
						     	</div>
					     	</div>
						</div>

						<div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			                    	<select class="form-control" name="city">             
										@if($publication->place != null)
										<option>{{ $publication->place->name }}</option>
										@foreach($places as $place)
											@if($place->name != $publication->place->name)
											<option>{{ $place->name }}</option>
											@endif
										@endforeach
										@endif
									</select>
			                    </div>		
			                    
			                </div>
			            </div>
			            

			           <div class="form-group">
			           <label>Descripción</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" name="description" value="{{$publication->description}}" >

			                    </div>		
			                    
			                </div>
			            </div>
			            <br>
			            <center class="btnregis"><div class="form-group">
			                <div class="12u$">
			                    <button type="submit" class="button special">
			                        Editar
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
