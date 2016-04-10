<?php

namespace MunDocente\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfMundocenteUser extends Model
{
    protected $table = 'type_of_mundocente_users';
    protected $primaryKey = 'username';

    public $incrementing = false;
}
