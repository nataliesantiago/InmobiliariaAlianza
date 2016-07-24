
<?php
	$arrayArea = array();
	//<?php echo $arrayArea;
	$arrayArea[0]='Sin definir-'; 
	foreach ($areas as $i => $area) {
	$arrayArea[$i+1]=$area->name.'-';
	}
?>

@extends('layouts.routes.normalroute')

@section('menus')

	@include('menus.empty')

@stop

@section('principal')
	
	@include('queries.information_search_advanced')

@stop