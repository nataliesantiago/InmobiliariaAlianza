<?php

namespace MunDocente\;

use Illuminate\Database\Eloquent\Model;

class TypeOfAcademicInstitution extends Model
{
    protected $table = 'type_of_academic_institutions';

    public function academicInstitutions()
    {
    	return $this->hasMany(AcademicInstitution::class);
    }
}
