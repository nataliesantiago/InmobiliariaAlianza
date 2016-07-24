@extends('layouts.routes.routedown')

@section('menus')

    @include('menus.home')

@stop

@section('principal')
    <div id="main-wrapper">
        <div class="container">
            <div class="row">
                    <!-- Sidebar -->
                @if (Auth::guest())  
                <div class="4u 12u(mobile)">  
                    @include('auth.login')
                </div>
               
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
               <article class="box post">
                  <div class="row">
                  @foreach($publications as $publication)
                
                   @include('publication.institution')

                      <div class="col-sm-6 col-md-9">
                        <time class="published" datetime="yyyy-MM-dd"><?php echo date('d-M-Y', strtotime($publication->date_publication)); ?></time>
                        @include('publication.information')
                      </div>
                      
                    @endforeach
                </div>

                @include('publication.inner')
              </article>

                </div>
                @else
                 <div class="4u 12u(mobile)">                   
                    @include('areas')
                 </div>
                <div class="8u 12u(mobile) important(mobile)">

                    <!-- Content -->
                <article class="box post">
                <div class="row">
                  @foreach($publications as $publication)
                
                   @include('publication.institution')

                      <div class="col-sm-6 col-md-9">
                        <time class="published" datetime="yyyy-MM-dd"><?php echo date('d-M-Y', strtotime($publication->date_publication)); ?></time>
                        @include('publication.information')
                      </div>
                      
                    @endforeach                
              </article>

                </div>
                @endif

            </div>
        </div>
    </div>
@stop
