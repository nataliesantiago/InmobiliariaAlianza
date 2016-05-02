<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\User;
use MunDocente\Place;
use MunDocente\TypeOfAcademicInstitution;

class AcademicInstitution extends Model
{
    protected $table = 'academic_institutions';

    public function typeOfAcademicInstitution()
    {
    	return $this->belongsTo('MunDocente\TypeOfAcademicInstitution', 'type');
    }

    public function users(){
    	return $this->hasMany('MunDocente\User');
    }

    public function place()
    {
    	return $this->belongsTo('MunDocente\Place', 'place');
    }

}