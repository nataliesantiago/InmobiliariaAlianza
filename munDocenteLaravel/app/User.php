<?php

namespace MunDocente;

use Illuminate\Foundation\Auth\User as Authenticatable;
use MunDocente\TypeOfUser;
use MunDocente\Publication;
use MunDocente\AcademicInstitution;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','fullname', 'email', 'password', 'type', 'phone', 'contact', 'academic_institution',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function typeOfUser()
    {
        return $this->belongsTo('MunDocente\TypeOfUser', 'type');
    }

    public function publications(){
        return $this->hasMany('MunDocente\Publication');
    }

    public function academicInstitution()
    {
        return $this->belongsTo('MunDocente\AcademicInstitution', 'academic_institution');
    }
}
