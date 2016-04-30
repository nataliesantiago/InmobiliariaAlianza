<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\TypeOfPlace;
use MunDocente\AcademicInstitution;
use MunDocente\Publication;
use MunDocente\Place;

class Place extends Model
{
    protected $table = 'places';


    public function typeOfPlace()
    {
    	return $this->belongsTo('MunDocente\TypeOfPlace', 'type');
    }

    public function academicInstitutions()
    {
    	return $this->hasMany('MunDocente\AcademicInstitution');
    }

    public function publications(){
    	return $this->hasMany('MunDocente\Publication');
    }

    public function parent()
    {
    	return $this->belongsTo('MunDocente\Place', 'parent');
    }

    public function myPlaces()
    {
    	return $this->hasMany('MunDocente\Place');
    }
}
