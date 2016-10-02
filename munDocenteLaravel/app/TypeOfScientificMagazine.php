<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\Publication;

class TypeOfScientificMagazine extends Model
{
    protected $table = 'type_of_scientific_magazines';

    public function scientificMagazines()
    {
    	return $this->hasMany('alianza\Publication');
    }
}
