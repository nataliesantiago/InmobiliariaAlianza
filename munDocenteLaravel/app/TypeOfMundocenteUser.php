<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;

class TypeOfMundocenteUser extends Model
{
    protected $table = 'type_of_mundocente_users';

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
