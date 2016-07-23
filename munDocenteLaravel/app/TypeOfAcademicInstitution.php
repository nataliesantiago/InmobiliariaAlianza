<?php

namespace MunDocente;

use Illuminate\Database\Eloquent\Model;
use MunDocente\AcademicInstitution;

class TypeOfAcademicInstitution extends Model
{
    protected $table = 'type_of_academic_institutions';

    public function academicInstitutions()
    {
    	return $this->hasMany('MunDocente\AcademicInstitution');
    }
}
