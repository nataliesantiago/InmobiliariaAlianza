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
        	<input type="text" class="form-control"  name="start_date"  id="dateInit" value="{{$publication->start_date}}">
        </div>	
      
    </div>
</div>


<div class="form-group">
<label>Fecha fin</label>
    <div class="12u$(xsmall)">
        <div class="input-group" id='datetimepicker1'>
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        	<input type="text" class="form-control"  name="end_date"  id="dateEnd" value="{{$publication->end_date}}">
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
      		@foreach($publication->areas as $i => $area)
      		@if($i == 0)							      		
			<select class="form-control" id="Unremove" required name="area[]">             
			@else
			<select class="form-control" id="selectArea" required name="area[]">             
			@endif
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