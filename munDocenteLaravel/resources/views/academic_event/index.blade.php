@extends('main_info')

@section('menu')

    @include('menus.event')

@stop

@section('login')
               
    @include('auth.login')

 @stop

@section('content')   

 @include('publication.box_publication')

@stop

@section('area')

@include('areas')

@stop