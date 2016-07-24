<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Sin definir-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>
@extends('layouts.routes.routedown')

@section('menus')

	@include('menus.empty')

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">

			<div class="12u 12u(mobile)">
				<center><h2 class="count">AGREGAR REVISTAS CIENTÍFICAS</h2></center>			
			</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				@yield('alert')
				<section class="box">
			   		<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
			        
			        <div class="row uniform">
			        {!! Form::open(['id' => 'valForm','route' => 'scientific_magazine.store', 'method' => 'POST']) !!}
			         {!! csrf_field() !!}
			         
			            @include('publication.create')

			        	  <div class="form-group">
			                <div class="12u$(xsmall)">
			                	<h4>Categoría PUBLINDEX*</h4>
			                    
			                    <div class="input-group">			                    
									<span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>				
									<select name="category" placeholder="Categoria *"class="form-control" />
									@foreach($type_of_scientific_magazines as $type_of_scientific_magazine)
										<option>{{ $type_of_scientific_magazine->value }} </option>
									@endforeach
									</select>
								</div>
			                    
			                </div>
			            </div>    
						<br>
						
			            @include('publication.add')
			        
			    {!! Form::close() !!}
			    </div>
			    </section>
			</div>
        </div>
    </div>
</div>
@endsection
