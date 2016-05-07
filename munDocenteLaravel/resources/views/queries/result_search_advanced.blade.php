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
            
                <time class="published" datetime="2016-05-01">{{ $publication->date_publication }}</time>
                    <br><br>
                    <header class="name">
                        <h3 style="color: black;">{{ $publication->name }}</h3>
                    </header>
                    
                    @if($publication->description!=null)
                    <p class="description">{{ $publication->description }}</p>
                    @endif

                    <p class="publicator">Publicado por: <a href="">{{ $publication->user->fullname }}</a></p>

                    <p class="place">{{ $publication->place->name }}</p>                  
                    <p class="start">Fecha de inicio: {{ $publication->start_date }}</p>

                    @if($publication->end_date!=null)
                    <p class="end">Fecha final: {{ $publication->end_date }}</p>
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
                    <ul class="actions pagination">
                    <center><li>{!! $publications->links() !!}</li></center>
                    </ul>
                    </div>

    @stop

   @section('area')
    
    @include('areas')

@stop