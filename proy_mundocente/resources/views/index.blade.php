@extends('layouts.index')
	@section('content')

				<div class="span8">
				@foreach($publications as $publication)

				<h2 style="color: black;">{{ $publication->name }}</h2>
				@if($publication->description!=null)
					<p style="color: black;">{{ $publication->description }}</p>
					@endif

					<p style="color: black;">Publicado por <a href="#">{{ $publication->username }}</a>&nbsp;&#124;&nbsp; {{ $publication->date_publication }}</p>
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
					
					<h4 href="{{ $publication->url }}" class="btn btn-link pull-left"> Abrir link original </h4>
						
					</h5>
					

					<hr class="soften">
				@endforeach
					<div class="inner">
					<ul class="actions pagination">
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
					</div>
				
				</div>


	@stop