<?php

namespace MunDocente;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
        return $this->belongsTo(TypeOfMundocenteUser::class, 'type');
    }

    public function publications(){
        return $this->hasMany(Publication::class);
    }

    public function academicInstitution()
    {
        return $this->belongsTo(AcademicInstitution::class);
    }
}
