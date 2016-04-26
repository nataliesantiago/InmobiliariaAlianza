
@extends('layouts.app')
@section('content')
<script src="assets/js/areas.js"></script>
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
				<h2>Búsqueda avanzada</h2><hr>
			<section class="box">
			<header>
				
				<form method="post">
					<div class="row uniform">
						<div class="12u$">
							<label for="demo-name">Buscar</label>
							<input type="text" name="demo-name" id="demo-name" value="" />
						</div>     
						<div class="form-group">
							 <label class="control-label col-xs-3">Áreas</label>
					      	<div class="col-xs-12" id="listArea">
					        <div  class="input-group">
								<select class="form-control" required name="area[]">             
					        		<option name>Seleccione una opción</option>
									<option>Software</option>
									<option>Educación</option>
									<option>Web</option>
									<option>Inglés</option>
									<option>Matemáticas</option>
									<option>Ingeniería</option>
									<option>Medicina</option>
								</select>
							    <span class="input-group-btn input-sm">
					            <button type="button" class= "btn btn-primary" onclick="crearArea(this)"><i class="glyphicon glyphicon-plus"></i></button>
					          	</span>
					     	</div>
					     	</div> 
					        <br>
					    </div>  
						<div class="12u">
							<label>Categorias</label>
						</div>								
						<div class="4u">
							<input type="checkbox" id="convocatorias" name="convocatorias">
							<label for="convocatorias">Convocatorias</label>						
						</div>
						<div class="4u">
							<input type="checkbox" id="revistas" name="revistas">
							<label for="revistas">Revistas</label>									
						</div>
						<div class="4u">
							<input type="checkbox" id="eventos" name="eventos">
							<label for="eventos">Eventos</label>									
						</div>
						<a href="#" class="special">Más opciones</a>
						<div class="12u$">
							<ul class="actions">
								<li><a id="busqueda" href="#resultado" class="button special icon fa-search">Buscar</a></li>
							</ul>
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