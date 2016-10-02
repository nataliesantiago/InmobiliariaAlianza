<?php

namespace alianza;

use Illuminate\Database\Eloquent\Model;
use alianza\AcademicInstitution;

class TypeOfAcademicInstitution extends Model
{
    protected $table = 'type_of_academic_institutions';

    public function academicInstitutions()
    {
    	return $this->hasMany('alianza\AcademicInstitution');
    }
}
