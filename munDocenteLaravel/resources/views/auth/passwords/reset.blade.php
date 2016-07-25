@extends('layouts.routes.downtwice')

@section('menus')

    <li style="white-space: nowrap;"><a href="/">
        <i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
        <i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
        <i class="glyphicon glyphicon-book"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
        <i class="glyphicon glyphicon-bullhorn"></i> Eventos académicos</a></li>

@stop
@section('principal')
<div id="main-wrapper">
<div class="container">
    <div class="row">
        <div class="12u 12u(mobile)">
            <center><h2 class="count">CAMBIAR CONTRASEÑA</h2></center>            
        </div>
        <div class="4u 12u(mobile)"></div>
        <div class="4u 12u(mobile)">
        <section class="box">
            <form method="POST" action="/password/reset">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group">
                    <div class="12u$(xsmall)">
                        Email
                        <div class="input-group">
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="12u$(xsmall)">
                        Contraseña
                        <div class="input-group">
                        <input type="password" name="password">
                    </div>    
                </div>
                <div class="form-group">
                    <div class="12u$(xsmall)">
                        Confirmar Contraseña
                        <div class="input-group">
                        <input type="password" name="password_confirmation">
                    </div>
                </div>
                <div>
                <div class="form-group">
                    <div class="12u$(xsmall)">
                        <div class="input-group">
                
                            <button type="submit">
                            Asignar nueva contraseña
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
</div>
</div>
 @stop