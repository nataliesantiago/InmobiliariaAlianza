<?php

namespace alianza;

use Illuminate\Foundation\Auth\User as Authenticatable;
use alianza\TypeOfUser;
use alianza\Publication;
use alianza\AcademicInstitution;
use alianza\Area;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','fullname', 'email', 'password', 'type', 'phone', 'contact', 'academic_institution', 'photo',
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
        return $this->belongsTo('alianza\TypeOfMundocenteUser', 'type');
    }

    public function publications(){
        return $this->hasMany('alianza\Publication');
    }

    public function academicInstitution()
    {
        return $this->belongsTo('alianza\AcademicInstitution', 'academic_institution');
    }

    public function areas(){
        return $this->belongsToMany('alianza\Area');
    }
}
