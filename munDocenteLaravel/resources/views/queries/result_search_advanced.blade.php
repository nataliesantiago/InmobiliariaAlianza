@extends('main_info')

@section('menu')

    <li class="current"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('login')
               
    @include('login')

@stop

    @section('content')     
                
                @foreach($publications as $publication)
               
                <time class="published" datetime="yyyy-MM-dd">{{ $publication->date_publication }}</time>
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
             
                @endforeach
                    
                

                <div class="inner">
                    <ul>
                    <center><li>{!! $publications->links() !!}</li></center>
                    </ul>
                    </div>

    @stop

   @section('area')
    
    @include('areas')

@stop