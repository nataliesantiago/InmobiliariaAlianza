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
               
   <h4>No se han encontrado publicaciones</h4>

@stop

    @section('area')
    
    @include('areas')

@stop

				