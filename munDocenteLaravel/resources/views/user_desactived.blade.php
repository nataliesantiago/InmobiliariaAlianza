@extends('main')

@section('menu')
    <li class="current"><a href="/">
    	<i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
    	<i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
    	<i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
    	<i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>
@stop

@section('intro')

    <li style="white-space: nowrap;"><a href="#intro">
    	<i class="glyphicon glyphicon-plus-sign"></i></a></li>  
@stop

@section('login')
               
    @include('auth.login')

@stop

	@section('content')
    <center><h3>Cuenta desactivada</h3></center> 		
		<div class="container">
                    <div class="content">
                        <li><a href="/actived_me" class="button big special">Activar cuenta</a></li>
                      </div>
        </div>
	@stop

    @section('area')
    
    @include('areas')

@stop
