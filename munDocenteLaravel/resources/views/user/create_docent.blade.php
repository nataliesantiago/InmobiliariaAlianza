@extends('user.create')

@section('name')

	<div class="12u 12u(mobile)">
		<center><h2 class="count">NUEVA CUENTA DOCENTE</h2></center>			
	</div>

@stop

@section('interes')
	<input type="hidden" name="type" value="1">

	
	<div class="col-xs-12" id="listArea">
	       <div  class="input-group">
	       	<span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>				              								
			<select class="form-control" required name="area[]" name="area[]">             
	      		@foreach($areas as $area)
				<option>{{ $area->name }}</option>
				@endforeach
			</select>
	    
			</div>
    </div> 

@stop


