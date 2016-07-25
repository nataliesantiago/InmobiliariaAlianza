@extends('layouts.routes.downtwice')

@section('menus')

    <li ><a href="/admin">
		  <i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
	  <li><a href="/own_publications">
      <i class="glyphicon glyphicon-folder-open"></i> Mis publicaciones</a></li>       
    <li class="current"><a href="/university">
		  <i class="glyphicon glyphicon-education"></i> Universidades</a></li>
    <li><a href="/manage_publications">
      <i class="glyphicon glyphicon-wrench"></i> Administrar publicaciones</a></li>

@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">

 			<div class="2u 12u(mobile)"></div>
 			<div class="8u 12u(mobile)">
<section class="box">  

            @foreach($academic_institutions as $academic_institution)
 			 <div class="university">

            <ul class="nav navbar-nav navbar-right">
                <button type="button" name="editUniversity" class="btn btn-primary" ><a class="editPub" href="{{ route('university.edit', $academic_institution->id) }}">Editar 
                <i class="glyphicon glyphicon-edit"></i></a></button>  
            </ul>
            <ul class="nav navbar-nav navbar-right">
            
                {!! Form::open(array('route' => array('university.destroy', $academic_institution->id), 'method' => 'delete')) !!}
                    <button class="btn btn-danger" type="submit">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>
                {!! Form::close() !!}
            
                &nbsp;&nbsp;
             </ul>
            @if($academic_institution->name!=null)
            <p class="nameU">Nombre: {{ $academic_institution->name }}</p>
            @endif

            @if($academic_institution->type!=null)
            <p class="typeU">Tipo de universidad o institución: {{ $academic_institution->typeOfAcademicInstitution->value}}</p>
            @endif

             @if($academic_institution->email!=null)
            <p class="emailUn">Correo electrónico: {{ $academic_institution->email }}</p>
            @endif

             @if($academic_institution->phone!=null)
            <p class="phoneU">Teléfono: {{ $academic_institution->phone }}</p>
            @endif

             @if($academic_institution->description!=null)
            <p class="descriptionU">Descripción: {{ $academic_institution->description }}</p>
            @endif

             @if($academic_institution->place!=null)
            <p class="placeU">Lugar: {{ $academic_institution->place_id->name}}</p>
            @endif     
			                             
               
               </div> 
               <hr>
            @endforeach
            
          </section>
			</div>
		</div>
	</div>
</div>
@endsection