@extends('layouts.routes.routedown')

@section('menus')
    <li ><a href="/">
        <i class="glyphicon glyphicon-home"></i> Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">
        <i class="glyphicon glyphicon-briefcase"></i> Convocatorias</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">
        <i class="glyphicon glyphicon-edit"></i> Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">
        <i class="glyphicon glyphicon-education"></i> Eventos académicos</a></li>

@stop

<!-- Main Content -->
@section('principal')
<div id="main-wrapper">
<div class="container">
    <div class="row">
        <div class="12u 12u(mobile)">
            <center><h2 class="count">RECORDAR CONTRASEÑA</h2></center>            
        </div>
        <div class="3u 12u(mobile)"></div>
        <div class="6u 12u(mobile)">
        <section class="box">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico *" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <center class="btnregis">
                    <div class="form-group">
                        <div class="12u$">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-envelope"></i> Enviar link
                            </button>
                        </div>
                    </div>
                </center>
            </form>
        
    
        </section>
        </div>
    </div>
</div>
</div>
@endsection
