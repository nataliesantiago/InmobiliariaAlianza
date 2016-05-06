Oprime acá para asignar tu contraseña nueva: <a href="{{ $link = url('passwords/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
