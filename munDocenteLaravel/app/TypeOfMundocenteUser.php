<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;

use alianza\User;

class TypeOfMundocenteUser extends Model
{
    protected $table = 'type_of_mundocente_users';

    public function users()
    {
    	return $this->hasMany('alianza\User');
    }
}
