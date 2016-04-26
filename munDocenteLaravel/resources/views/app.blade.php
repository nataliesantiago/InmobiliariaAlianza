@extends('layouts.app')
	@section('content')

<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">

                <div class="8u 12u(mobile)">
                    <article class="box post">
                        <div id = "slider">
                            <div class ="elemento">
                                <img src="images/pic08.jpg">
                            </div>
                            <div class ="elemento">
                                <img src="images/pic09.jpg">
                            </div>
                            <div class ="elemento">
                                <img src="images/pic10.jpg">
                            </div>
                        </div>

                <div class="information">
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
				    </div>
				    
                    </article>
                </div>
                 @if (Auth::guest())
                <div class="4u 12u(mobile)">

                <section class="box">
                            <form class="form login-form" role="form" method="POST" action="{{ url('/login') }}">
                             {!! csrf_field() !!}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                 
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuario"/>
                                     @if ($errors->has('username'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                         @endif
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                 
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" />
                                    @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <center><label class="checkbox inline">
                                </label><input type="checkbox" name="remember">Recordar</center><br>
                                <center>
                                    <ul class="social">
                                        <li><button type="submit" class="btn2 btn-default">Ingresar</button></li>
                                        <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                                        <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
                                    </ul>
                                </center>
                                <HR>
                                <center><a class="forgot btn-link" href="{{ url('/password/reset') }}">¿Olvido su contraseña?</a></center>
                            </form>
                        <hr >       
                    </section>

                </div>
                @endif

            </div>
        </div>
    </div>


	@stop

				