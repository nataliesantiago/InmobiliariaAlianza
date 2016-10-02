<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\Place;

class TypeOfPlace extends Model
{
    protected $table = 'type_of_places';

    public function places()
    {
    	return $this->hasMany('alianza\Place');
    }
}
