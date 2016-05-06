

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
         </label><input type="checkbox" name="remember">           Recordar</center><br>
        <center>
        <button type="submit" class="btn2 btn-default">Ingresar</button>
            <ul class="social_login">
                
            <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
            <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
            <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
            </ul>
            
        </center>
        <HR>
        <center><a class="forgot btn-link" href="/resetpass">¿Olvido su contraseña?</a></center>
    </form>
<hr >       
</section>

