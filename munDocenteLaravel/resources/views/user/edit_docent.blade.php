@extends('user.edit')

@section('name')

	<div class="12u 12u(mobile)">
		<header>
			<center><h2 class="config">CONFIGURAR CUENTA DOCENTE</h2></center>			
		</header>
	</div>

@stop

@section('interes')
<input type="hidden" name="type" value="1">
<!--
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
!-->
@stop
