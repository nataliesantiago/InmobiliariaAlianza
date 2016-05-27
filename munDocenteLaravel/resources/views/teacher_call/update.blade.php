<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Sin definir-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>

@extends('teacher_call.create')

@section('alert')

<div class="alert alert-success alert-dismissible" role="alert">
  <h4><button type="btnClose" class="btnClose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  ¡Completo!</h4>&nbsp;&nbsp;&nbsp;La convocatoria fue inscrita correctamente. 
</div>

@stop

@section('teacher_call')
						<div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la convocatoria docente *" required  name="name" >
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
			                    	<input type="text" class="form-control" name="start_date" placeholder="Fecha de inicio *" id="dateInit" required >			                
			                    </div>	
			                  
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			                    	<input type="text" class="form-control" name="end_date" placeholder="Fecha fin *" id="dateEnd" required >
			                    	
			                    </div>				                  
			                </div>
			            </div>
						
						<div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
			                    	<input type="text" class="form-control" placeholder="Cargo *" required name="position" >
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
						      		<select class="form-control" required name="area[]">             
										@foreach($areas as $area)
										<option>{{ $area->name }}</option>
										@endforeach
									</select>
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

			            <div class="form-group">
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" placeholder="Descripción *" name="description" required  >
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
@stop			            