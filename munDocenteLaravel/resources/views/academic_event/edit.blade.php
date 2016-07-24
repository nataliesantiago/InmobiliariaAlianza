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

			            @include('publication.upload')

			            <div class="form-group">
                            <div class="field">
                                <textarea name="contacto" id="contacto " placeholder="Contacto" rows="2"></textarea>
                            </div>
                        </div>

			           @include('publication.edit')
			        </div>			   
			    </section>
			</div>
        </div>
    </div>
</div>

@endsection
