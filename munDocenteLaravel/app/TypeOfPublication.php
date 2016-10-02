<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\Publication;
class TypeOfPublication extends Model
{
    protected $table = 'type_of_publications';

    public function publications(){
    	return $this->hasMany('alianza\Publication');
    }
}
