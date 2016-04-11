@extends('layouts.index')
	@section('content')

				<div class="span8">
				@foreach($publications as $publication)
				@if($publication->type==3)
				<h2>{{ $publication->name }}</h2>
					<h4>Publicado por <a href="#">{{ $publication->username }}</a>&nbsp;&#124;&nbsp; {{ $publication->date_publication }}</h4>
					<h4>{{ $publication->place }}</h4>					
					<h4>Fecha de comienzo: {{ $publication->start_date }}</h4>
					@if($publication->end_date!=null)
					<h4>Fecha final: {{ $publication->end_date }}</h4>
					@endif					
					@if($publication->contact!=null)
					<h4>Contacto: {{ $publication->contact }}</h4>
					@endif
					@if($publication->position!=null)
					<h4>Cargo: {{ $publication->position }}</h4>
					@endif
					@if($publication->category!=null)
					<h4>Categoria: {{ $publication->category }}</h4>
					@endif
					@if($publication->description!=null)
					<p>{{ $publication->description }}</p>
					@endif
					<a href="{{ $publication->url }}" class="btn btn-primary pull-left"> Abrir link original </a>
					<br>
					<br>
						<a href="#comments"><i class="icon-comment"></i>&nbsp;3 comments</a>
						&nbsp;&nbsp;
						<i class="icon-tags"></i>
						&nbsp;
						<a href="#">responsive</a>
						<a href="#">web</a>
						<a href="#">mobile</a>
					</h5>
					

					<hr class="soften">
				@endif
				@endforeach

				<div class="inner">
					<ul class="actions pagination">
					<center><li>{!! $publications->links() !!}</li></center>
					</ul>
					</div>

				</div>

	@stop