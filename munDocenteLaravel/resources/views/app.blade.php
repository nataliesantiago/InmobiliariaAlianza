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
  
  <div class="row">
				@foreach($publications as $publication)
        
        @include('publication.institution')

        <div class="col-sm-6 col-md-9">
          <time class="published" datetime="yyyy-MM-dd"><?php echo date('d-M-Y', strtotime($publication->date_publication)); ?></time>
          @include('publication.information')
        </div>
        
				@endforeach
  </div>

  @include('publication.inner')
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

				