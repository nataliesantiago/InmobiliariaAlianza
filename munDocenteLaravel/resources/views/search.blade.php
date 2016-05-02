
<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Seleccione una opción-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>

@extends('layouts.app')

@section('menu')

    <li style="white-space: nowrap;"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

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
					        		<option name>Seleccione una opción</option>
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
							<option name>Seleccione una opción</option>
							@foreach($places as $place)
									<option>{{ $place->name }}</option>
							@endforeach
								</select>
							</div>
						</div> 
						<div class="12u">
							<label class="col-xs-12"><H3>Tipo de publicación</H3></label>
															
							<div class="col-xs-4">
								<input type="checkbox" id="convocatorias" name="convocatorias"> 
								<label class="convocatorias" for="convocatorias">Convocatorias</label>						
							</div>
							<div class="col-xs-4">
								<input type="checkbox" id="revistas" name="revistas">
								<label class="revistas" for="revistas">Revistas</label>									
							</div>
							<div class="col-xs-4">
								<input type="checkbox" id="eventos" name="eventos">
								<label class="eventos" for="eventos">Eventos</label>									
							</div>
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


			</header>
		</section>
			</div>
		</div>
	</div>
</div>

@stop