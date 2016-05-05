@extends('create')

@section('areaList')

   		<div class="12u 12u$(xsmall)">
				
				<div class="col-xs-8" id="listArea">
				       <div  class="input-group">
						<select class="form-control" required name="area[]">             
				      		@foreach($areas as $area)
							<option>{{ $area->name }}</option>
							@endforeach
						</select>
				    
						</div>
			    </div> 
			</div>
@stop