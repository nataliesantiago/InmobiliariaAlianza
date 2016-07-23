@extends('layouts.routes.downtwice')

@section('menus')

     <li ><a href="/admin">
		<i class="glyphicon glyphicon-ok-sign"></i> Activar Usuarios</a></li>
	<li class="current"><a href="/university">
		<i class="glyphicon glyphicon-education"></i> Universidades o Instituciones Academicas</a></li>

@stop

@section('principal')

<div id="main-wrapper">
	<div class="container">
		<div class="row">

 			<div class="2u 12u(mobile)"></div>
 			<div class="8u 12u(mobile)">
            @foreach($academic_institutions as $academic_institution)
 			<section class="box">  
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
                </section>
            @endforeach
			</div>
		</div>
	</div>
</div>
@endsection