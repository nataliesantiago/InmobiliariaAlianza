<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;

class TypeOfPublication extends Model
{
    protected $table = 'type_of_publications';

    public function publications(){
    	return $this->hasMany(Publication::class);
    }
}
