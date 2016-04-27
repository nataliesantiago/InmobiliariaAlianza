
@extends('layouts.app')
@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">

				<h3>Búsqueda avanzada</h3><hr>
			<section class="box">
			<header>
				
				<form method="post">
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
									<option>Software</option>
									<option>Educación</option>
									<option>Web</option>
									<option>Inglés</option>
									<option>Matemáticas</option>
									<option>Ingeniería</option>
									<option>Medicina</option>
								</select>
							    <span class="input-group-btn input-m">
					            <button class= "btn btn-primary" onclick="crearArea(this)"><i class="glyphicon glyphicon-plus"></i></button>
					          	</span>
					     	</div>
					     	</div> 
					        <br>
					    </div>  
						<div class="12u">
							<label class="col-xs-12"><H3>Categorías</H3></label>
															
							<div class="col-xs-4">
								<input type="checkbox" id="convocatorias" name="convocatorias">
								<label for="convocatorias">Convocatorias</label>						
							</div>
							<div class="col-xs-4">
								<input type="checkbox" id="revistas" name="revistas">
								<label for="revistas">Revistas</label>									
							</div>
							<div class="col-xs-4">
								<input type="checkbox" id="eventos" name="eventos">
								<label for="eventos">Eventos</label>									
							</div>
						</div>
						<div class="12u">
							<div class="col-xs-12">
								<ul class="actions">
									<li><a id="busqueda" href="#resultado" class="button special icon fa-search">Buscar</a></li>
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