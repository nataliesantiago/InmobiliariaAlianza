@extends('main_info')

@section('menu')

    @include('menus.home')

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

  
@stop

@section('area')

    @include('areas')

@stop