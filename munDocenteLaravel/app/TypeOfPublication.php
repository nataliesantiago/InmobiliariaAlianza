<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Publication;
class TypeOfPublication extends Model
{
    protected $table = 'type_of_publications';

    public function publications(){
    	return $this->hasMany('MunDocente\Publication');
    }
}
