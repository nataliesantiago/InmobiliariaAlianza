@extends('layouts.routes.normalroute')

@section('menus')
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
				<section class="box">

            <!-- Aqui se recorren las publicaciones 
            hechas por el usuario -->        
			@foreach($publications as $publication)
	       <div class="col-sm-6 col-md-6">
    
      		 
               @if($publication->user->academic_institution==1)
                <img src="images/uptc.png" > 
                @endif
                    @if($publication->user->academic_institution==2)
                <img src="images/nacional.png" > 
                @endif
                    @if($publication->user->academic_institution==3)
                <img src="images/sena.png" > 
                @endif
                    @if($publication->user->academic_institution==4)
                <img src="" > 
                @endif
                    @if($publication->user->academic_institution==5)
                <img src="images/uniboy.png" > 
                @endif
                    @if($publication->user->academic_institution==6)
                <img src="images/uis.png" > 
                @endif
                    @if($publication->user->academic_institution==7)
                <img src="images/antioquia.png" > 
                @endif
                    @if($publication->user->academic_institution==8)
                <img src="images/pereira.png" > 
                @endif
                    @if($publication->user->academic_institution==9)
                <img src="images/caldas.png" > 
                @endif
                    @if($publication->user->academic_institution==10)
                <img src="images/medellin.png" > 
                @endif
                    @if($publication->user->academic_institution==11)
                <img src="images/eafit.png" > 
                @endif

                
                
			<div class="caption">
                <time class="published" datetime="yyyy-MM-dd">{{ $publication->date_publication }}</time>

                 <ul class="nav navbar-nav navbar-right">
                    <button type="button" name="activateUser" class="btn btn-primary">Editar 
                    <i class="glyphicon glyphicon-edit"></i></button>  
                    <button type="button" name="activateUser" class="btn btn-danger">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>  
                    &nbsp;&nbsp;
                </ul>
                    <br><br>
                    <header class="name">
                    @if($publication->type==1)
                    	 <h3 style="color: black;"><i class="glyphicon glyphicon-briefcase"></i>  {{ $publication->name }}</h3>
                   @endif
                    @if($publication->type==2)
                    	 <h3 style="color: black;"><i class="glyphicon glyphicon-edit"></i>  {{ $publication->name }}</h3>
                   @endif
                    @if($publication->type==3)
                    	<h3 style="color: black;"><i class="glyphicon glyphicon-education"></i>  {{ $publication->name }}</h3>
                   @endif
                   <br>
                    </header>

                    
                    @if($publication->description!=null)
                    <p class="description">{{ $publication->description }}</p>
                    @endif

                    <p class="publicator">Publicado por: {{ $publication->user->fullname }}</p>
                    <p class="place">{{ $publication->place }}</p>					
					<p class="start">Fecha de inicio: {{ $publication->start_date }}</p>

					@if($publication->end_date!=null)
					<p class="end">Fecha final: {{ $publication->end_date }} </p>
					@endif					
					@if($publication->contact!=null)
					<p class="contact">Contacto: {{ $publication->contact }}</p>
					@endif
					@if($publication->position!=null)
					<p class="carge">Cargo: {{ $publication->position }}</p>
					@endif
					@if($publication->category!=null)
					<p class="category">Categoria: {{ $publication->typeScientificMagazine->value }}</p>
					@endif
					

					<p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir link</a>
                    </p>
                <hr>
            
              </div>
            </div>    
				@endforeach
					
				

				<div class="inner">
					<ul>
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
				</div>
			        
			    </section>
			</div>
        </div>
    </div>
</div>

@stop