<?php

namespace MunDocente\;

use Illuminate\Database\Eloquent\Model;

class AcademicInstitution extends Model
{
    protected $table = 'academic_institutions';

    public function typeOfAcademicInstitution()
    {
    	return $this->belongsTo(TypeOfAcademicInstitution::class, 'type');
    }

    public function users(){
    	return $this->hasMany(User::class);
    }

    public function place()
    {
    	return $this->belongsTo(Place::class, 'place');
    }
