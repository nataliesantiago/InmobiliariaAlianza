<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\Publication;

class TypeOfScientificMagazine extends Model
{
    protected $table = 'type_of_scientific_magazines';

    public function scientificMagazines()
    {
    	return $this->hasMany('MunDocente\Publication');
    }
}
