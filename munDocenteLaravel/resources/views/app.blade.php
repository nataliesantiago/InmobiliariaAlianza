@extends('main')

@section('menu')

    @include('menus.home')
    
@stop

@section('intro')

    <li style="white-space: nowrap;"><a href="#intro">
    	<i class="glyphicon glyphicon-plus-sign"></i></a></li>  
@stop

@section('login')
               
    @include('auth.login')

@stop

	@section('content')		

				@foreach($publications as $publication)
			     <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                     
               @if($publication->user->academic_institution==1)
                <img class="" src="images/uptc.png" > 
                @endif
                @if($publication->user->academic_institution==2)
                <img src="images/nacional.png" > 
                @endif
                    @if($publication->user->academic_institution==3)
                <img class="col-xs-3" src="images/sena.png" > 
                @endif
                    @if($publication->user->academic_institution==4)
                <img class="col-xs-3" src="" > 
                @endif
                    @if($publication->user->academic_institution==5)
                <img class="col-xs-3" src="images/uniboy.png" > 
                @endif
                    @if($publication->user->academic_institution==6)
                <img class="col-xs-3" src="images/uis.png" > 
                @endif
                    @if($publication->user->academic_institution==7)
                <img class="col-xs-3" src="images/antioquia.png" > 
                @endif
                    @if($publication->user->academic_institution==8)
                <img class="col-xs-3" src="images/pereira.png" > 
                @endif
                    @if($publication->user->academic_institution==9)
                <img class="col-xs-3" src="images/caldas.png" > 
                @endif
                    @if($publication->user->academic_institution==10)
                <img class="col-xs-3" src="images/medellin.png" > 
                @endif
                    @if($publication->user->academic_institution==11)
                <img class="col-xs-3" src="images/eafit.png" > 
                @endif   
                    </div>
                  </div>
                <div class="col-sm-6 col-md-6">
                    <header class="name">
				    <time class="published" datetime="yyyy-MM-dd"><?php echo date('d-M-Y', strtotime($publication->date_publication)); ?></time>
                   <br><br>
                   @if($publication->type==1)
                    	 <h3 style="color: black;"><i class="glyphicon glyphicon-briefcase"></i>  {{ $publication->name }}</h3>
                   @endif
                    @if($publication->type==2)
                    	 <h3 style="color: black;"><i class="glyphicon glyphicon-book"></i>  {{ $publication->name }}</h3>
                   @endif
                    @if($publication->type==3)
                    	<h3 style="color: black;"><i class="glyphicon glyphicon-bullhorn"></i>  {{ $publication->name }}</h3>
                   @endif
                    </header>
                    @if($publication->place!=null)
                    <p class="place">{{ $publication->place->name }}</p>                    
                    @endif
                    
                    </div>
                </div>
                    
                    @if($publication->description!=null)
                    <p class="description">{{ $publication->description }}</p>
                    @endif
                    <p class="start">Fecha de inicio: <?php echo date('d-M-Y', strtotime($publication->start_date)); ?></p>            
					@if($publication->end_date!=null)
					<p class="end">Fecha final: <?php echo date('d-M-Y', strtotime($publication->end_date)); ?></p>
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
					
                     @if($publication->type==1)
                        <p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir convocatoria <i class="glyphicon glyphicon glyphicon-link"></i></a>
                    </p>
                   @endif
                    @if($publication->type==2)
                          <p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir revista <i class="glyphicon glyphicon glyphicon-link"></i></a>
                    </p>
                   @endif
                    @if($publication->type==3)
                         <p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir evento <i class="glyphicon glyphicon glyphicon-link"></i></a>
                    </p>
                   @endif
					
                <hr>
             
				@endforeach


				<div class="inner">
					<ul>
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
				</div>

                    <!--
                
                 <div class="panel-body" >   
                    <p class=" mediano text-center"><small>Cerrando sesión</small></p>     
                    <div class="progress progress-striped active">
                      <div class="progress-bar" role="progressbar"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                      style="width: 100%">
                      </div>          
                    </div>
                  </div> -->

	@stop

    @section('area')
    
    @include('areas')

@stop

				