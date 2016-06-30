@extends('main_info')

@section('menu')

    <li style="white-space: nowrap;"><a href="/teacher_call">
        <i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li class="current"><a href="/scientific_magazine">
        <i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
        <i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>
@stop

@section('login')
        
    @include('auth.login')

@stop

@section('content')     
                
    @foreach($publications as $publication)
    <div class="info">

                @if($publication->user->academic_institution==1)
                <img class="" src="images/uptc.png" > 
                @endif
                    @if($publication->user->academic_institution==2)
                <img class="col-xs-3" src="images/nacional.png" > 
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

    <time class="published" datetime="2016-05-01">{{ $publication->date_publication }}</time>
    @if (! Auth::guest())
        @if(Auth::user()->type==2 && Auth::user()->activedMe)
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" name="activateUser" class="btn btn-primary" ><a class="editPub" href="{{ route('scientific_magazine.edit', $publication->id) }}">Editar 
                    <i class="glyphicon glyphicon-edit"></i></a></button>  
                    <button type="button" name="activateUser" class="btn btn-danger">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>  
                    &nbsp;&nbsp;
                </ul>
            @endif
    @endif           
        <br><br>
        <header class="name">
            <h3 style="color: black;"><i class="glyphicon glyphicon-edit"></i>  {{ $publication->name }}</h3>
        </header>
        
        @if($publication->description!=null)
        <p class="description">{{ $publication->description }}</p>
        @endif

        <p class="publicator">Publicado por: {{ $publication->user->fullname }}</p>
        @if($publication->place!=null)
        <p class="place">{{ $publication->place->name }}</p>
        @endif


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
        </div>
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