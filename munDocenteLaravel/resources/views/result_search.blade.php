@extends('principal_info')

@section('menu')

    <li class="current"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('login')
                <div class="4u 12u(mobile)">

                <section class="box">
                            <form class="form login-form" role="form" method="POST" action="{{ url('/login') }}">
                             {!! csrf_field() !!}
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
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
                                <button type="submit" class="btn2 btn-default">Ingresar</button>
                                    <ul class="social_login">
                                        
                                    <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                                    <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                                    <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
                                    </ul>
                                    
                                </center>
                                <HR>
                                <center><a class="forgot btn-link" href="{{ url('/password/reset') }}">¿Olvido su contraseña?</a></center>
                            </form>
                        <hr >       
                    </section>

                </div>            
     @stop

@section('content')     
                
                @foreach($publications as $publication)
            
                <time class="published" datetime="2016-05-01">{{ $publication->date_publication }}</time>
                    <header class="name">
                        <h3 style="color: black;">{{ $publication->name }}</h3>
                    </header>
                  
                    @if($publication->description!=null)
                    <p class="description">{{ $publication->description }}</p>
                    @endif

                    <p class="publicator">Publicado por: {{ $publication->user->fullname }}</p>
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
                    <p class="category">Categoria: {{ $publication->typeScientificMagazine->value }}</p>
                    @endif
                    

                    <a href="{{ $publication->url }}" class="link btn-link pull-left"> Abrir link</a>

                <hr class="divition">
              
                @endforeach
                    
                

                <div class="inner">
                    <ul class="actions pagination">
                    <center><li>{!! $publications->links() !!}</li></center>
                    </ul>
                    </div>

    @stop

              @section('area')
    <section class="box">
            <ul class="nav nav-list">
                <li class="nav-header"><center><h3 style="color: #5A5A5A;">Areas</h3></center></li>
                @foreach($areas as $area)
                @if($area->parent==null)
                <li><a class="control-label col-xs-12" href="#">{{ $area->name }}</a></li>
                @else
                <label class="control-label col-xs-2">-</label>
                <li><a class="control-label col-xs-10" href="#">{{  $area->name }}</a></li >
                @endif
                @endforeach
            </ul>

            <li data-jstree='{"opened":true,"selected":true}'>Root
              <ul>
                <li data-jstree='{"disabled":true}'>Child</li>
                <li data-jstree='{"icon":"//jstree.com/tree.png"}'>
                  Child</li>
                <li data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>
                  Child</li>
              </ul>
            </li>

    </section>
@stop