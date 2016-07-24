<div class="form-group">
    <div class="12u$(xsmall)">
        <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        	<input type="text" class="form-control" placeholder="Nombre de la revista científica *" required name="name" value="{{ old('name') }}">
        </div>		
        
    </div>
</div>


<div class="form-group">
    <div class="12u$(xsmall)">
        <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
        	<input type="text" class="form-control" required placeholder="URL *" name="url" value="{{ old('url') }}">
        </div>		
        
    </div>
</div>

 <div class="form-group">
    <div class="12u$(xsmall)">
        <div class="input-group" id='datetimepicker1'>
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        	<input type="text" class="form-control" name="start_date" placeholder="Fecha de inicio *" id="dateInit" value="{{ old('start_date') }}">

        	
        </div>	
      
    </div>
</div>


<div class="form-group">
    <div class="12u$(xsmall)">
    <h5>Al dejar vacío el campo fecha fin esta indicando que la recepción es permanente.</h5>
        <div class="input-group" id='datetimepicker1'>
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        	<input type="text" class="form-control" name="end_date" placeholder="Fecha fin " id="dateEnd"  value="{{ old('end_date') }}">
        	
        </div>				                  
    </div>
</div>

<div class="form-group">
	<div class="12u$(xsmall)">
		
		<a class="control-label col-xs-1" 
	    href="javascript:crearArea('<?php echo implode($arrayArea) ?>'.split('-'))" >
	    	<i class="glyphicon glyphicon-plus"></i>
	    </a>
	    <a class="control-label col-xs-10"></a>
	    <a class="control-label col-xs-1" 
	    href="javascript:eliminarArea()">
	    	<i class="glyphicon glyphicon-remove"></i>
	    </a>
        <h4>Áreas de interés</h4>
      	<div id="listArea" class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
      		<select class="form-control" id="Unremove" required name="area[]">             
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