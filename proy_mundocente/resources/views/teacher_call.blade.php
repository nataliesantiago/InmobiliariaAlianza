@extends('layouts.index')
	@section('content')

				<div class="span8">
				@foreach($publications as $publication)
				<time class="published" datetime="2016-05-01">{{ $publication->date_publication }}</time>
				<h4 style="color: black;">{{ $publication->name }}</h4>
				@if($publication->description!=null)
					<p style="color: black;">{{ $publication->description }}</p>
					@endif
					<p style="color: black;">Publicado por <a href="#">{{ $publication->username }}</a></p>
					<p style="color: black;">{{ $publication->place }}</p>					
					<p style="color: black;">Fecha de comienzo: {{ $publication->start_date }}</p>
					@if($publication->end_date!=null)
					<p style="color: black;">Fecha final: {{ $publication->end_date }}</p>
					@endif					
					@if($publication->contact!=null)
					<p style="color: black;">Contacto: {{ $publication->contact }}</p>
					@endif
					@if($publication->position!=null)
					<p style="color: black;">Cargo: {{ $publication->position }}</p>
					@endif
					@if($publication->category!=null)
					<p style="color: black;">Categoria: {{ $publication->category }}</p>
					@endif
					
					<a href="{{ $publication->url }}" class="btn btn-link pull-left"> Abrir link original </a>
					<br>
					<br>
				
					</h5>
					

					<hr class="soften">
				@endforeach
					
				</div>

<div class="inner">
					<ul class="actions pagination">
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
					</div>
	@stop