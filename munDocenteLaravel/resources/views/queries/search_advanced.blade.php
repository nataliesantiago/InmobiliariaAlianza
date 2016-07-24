
<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Sin definir-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>

@extends('layouts.routes.normalroute')

@section('menus')

	@include('menus.empty')

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">

		<div class="12u 12u(mobile)">
				<header>
					<center><h3 class="busqueda">BÚSQUEDA AVANZADA</h3></center>		
				</header>
			</div>

			<div class="2u 12u(mobile)">
			
			</div>

			<div class="formbus 12u(mobile)">
			<section class="box">
			<header>
				
					@can('search-advanced')

				<form role="form" method="POST" action="{{ url('/result_search_advanced') }}">
				 {!! csrf_field() !!}
					<div class="row uniform">
						<div class="12u">
							<label class="control-label col-xs-12"><h3>Palabra clave</h3></label>
							<div class="col-xs-12">
							<input class="form-control" type="text" name="search"/>
							@if ($errors->has('search'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('search') }}</strong>
                                    </span>
                            @endif
							</div>
						</div>     
						<div class="12u">
							
							<label class="control-label col-xs-11"><h3>Áreas</h3>
							</label>
							<div class="col-xs-1">
						    <a class="control-label col-xs-1" 
						    href="javascript:crearArea('<?php echo implode($arrayArea) ?>'.split('-'))" >
						    	<i class="glyphicon glyphicon-plus"></i>
						    </a>
							</div>
					      	<div class="col-xs-12" id="listArea">
								<select class="form-control" required name="area[]">
									<option>Todas</option>         
					        		@foreach($areas as $area)
									<option>{{ $area->name }}</option>
									@endforeach
								</select>
					     	</div>
					    </div>  
					    <div class="12u">
							<label class="control-label col-xs-12"><h3>Ciudad</h3></label>
							<div class="col-xs-12">
							<select class="form-control" name="city" id="city" value="" />
							<option >Todas</option>
							@foreach($places as $place)
									<option>{{ $place->name }}</option>
							@endforeach
								</select>
							</div>
						</div> 
						<div class="12u">
							<label class="col-xs-12"><H3>Tipo de publicación</H3></label>
							<div class="col-xs-12">
							<select class="form-control" name="type_of_publication" value="" />
							<option >Todas</option>
							@foreach($type_of_publications as $type_of_publication)
									<option>{{ $type_of_publication->value }}</option>
							@endforeach
								</select>
						</div>
						
						<div class="12u">
							<div class="col-xs-12">
								<ul class="actions">
									<center><li><input class="btn btn-default" type="submit" value="Buscar"></p></li></center>
								</ul>
							</div>
						</div>			
					</div>
				</form>
				@else
				<div class="row uniform">
					<div class="12u">
							<label class="control-label col-xs-12"><h3>Lo sentimos, pero pero para poder ejecutar consultas avanzadas debes<a href="/user/create"> registrarte</a> o ingresar.</h3></label>
						</div>
				</div>
				@endcan

			</header>
		</section>
			</div>
		</div>
	</div>
</div>

@stop