@extends('main')

@section('menu')

    @include('menus.empty')

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
	@stop

    @section('area')
    
    @include('areas')

@stop
