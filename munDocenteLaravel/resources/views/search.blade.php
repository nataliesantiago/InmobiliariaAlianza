
@extends('layouts.app')
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
				
				<form role="form" method="POST" action="{{ url('/search') }}">
					<div class="row uniform">
						<div class="12u">
							<label class="control-label col-xs-12"><h3>Palabra clave</h3></label>
							<div class="col-xs-12">
							<input class="form-control" type="text" name="search" id="seacrh" value="" />
							</div>
						</div>     
						<div class="12u">
							<label class="control-label col-xs-3"><h3>Áreas</h3></label>
					      	<div class="col-xs-12" id="listArea">
					        <div  class="input-group">
								<select class="form-control" required name="area[]">             
					        		<option name>Seleccione una opción</option>
					        		@foreach($areas as $area)
									<option>{{ $area->name }}</option>
									@endforeach
								</select>
							    <span class="input-group-btn input-m">
					            <button class= "btn btn-primary" onclick="crearArea(this)"><i class="glyphicon glyphicon-plus"></i></button>
					          	</span>
					     	</div>
					     	</div> 
					        <br>
					    </div>  
					    <div class="12u">
							<label class="control-label col-xs-12"><h3>Ciudad</h3></label>
							<div class="col-xs-12">
							<select class="form-control" name="search" id="search" value="" />
							<option name>Seleccione una opción</option>
							@foreach($places as $place)
									<option>{{ $place->name }}</option>
							@endforeach
								</select>
							</div>
						</div> 
						<div class="12u">
							<label class="col-xs-12"><H3>Categorías</H3></label>
															
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
									<center><li><a id="busqueda" href="/result_search" class="button special icon fa-search">Buscar</a></li></center>
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