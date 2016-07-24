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

	@include('menus.empty')

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
		<center><h2 class="count">EDITAR CONVOCATORIA DOCENTE</h2></center>			
	</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				@yield('alert')

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
						 'route' => ['teacher_call.update', $publication->id]
						]) !!}

						{!! csrf_field() !!}
				
			            <div class="form-group">
			            <label>Nombre de la convocatoria docente</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" name="name" value="{{$publication->name}}">
			                    </div>		
			            	</div>
			            </div>
			            

			            @include('publication.upload')
						
						<div class="form-group">
						<label>Cargo</label>
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
			                    	<input type="text" class="form-control" name="position" value="{{$publication->position}}">
			                    </div>	
			                </div>
			            </div>
			            @include('publication.edit')
			            {!! Form::close() !!}
			    </div>
			    
			    </section>
			</div>
        </div>
    </div>
</div>
@endsection
