@extends('layouts.app')
	@section('content')
				<div class="info">
				@foreach($publications as $publication)
				<time class="published" datetime="2016-05-01">{{ $publication->date_publication }}</time>
                    <header class="name">
                        <h3 style="color: black;">{{ $publication->name }}</h3>
                    </header>
                  
                    @if($publication->description!=null)
                    <p class="description">{{ $publication->description }}</p>
                    @endif

                    <p class="publicator">Publicado por: {{ $publication->username }}</p>
                    <p class="place">{{ $publication->place }}</p>					
					<p class="start">Fecha de comienzo: {{ $publication->start_date }}</p>

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
					<p class="category">Categoria: {{ $publication->category }}</p>
					@endif
					
					<h4 href="{{ $publication->url }}" class="link btn-link pull-left"> Abrir link original </h4>
                <hr class="divition">
				@endforeach

					
				</div>

				<div class="inner">
					<ul class="actions pagination">
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
					</div>

	@stop

				