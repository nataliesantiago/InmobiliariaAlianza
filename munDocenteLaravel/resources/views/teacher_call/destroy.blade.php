@extends('layouts.routes.downtwice')

@section('menus')

    <li style="white-space: nowrap;"><a href="/teacher_call">
        <i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
        <i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
        <i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>

@stop

@section('principal')
<div id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u 12u(mobile)">
    </div>
            <div class="2u 12u(mobile)"></div>

            <div class="8u 12u(mobile)">
                @yield('alert')

                <section class="box">

                    @if(Session::has('flash_message'))
                     <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                      </div>
                    @endif
                    <h1>eliminada la convocatoria correctamnete</h1>    
                
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
