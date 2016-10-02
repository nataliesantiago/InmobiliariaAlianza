<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\TypeOfPlace;
use alianza\AcademicInstitution;
use alianza\Publication;
use alianza\Place;

class Place extends Model
{
    protected $table = 'places';


    public function typeOfPlace()
    {
    	return $this->belongsTo('alianza\TypeOfPlace', 'type');
    }

    public function academicInstitutions()
    {
    	return $this->hasMany('alianza\AcademicInstitution');
    }

    public function publications(){
    	return $this->hasMany('alianza\Publication');
    }

    public function parent()
    {
    	return $this->belongsTo('alianza\Place', 'parent');
    }

    public function myPlaces()
    {
    	return $this->hasMany('alianza\Place');
    }
}
