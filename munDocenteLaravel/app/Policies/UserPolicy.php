<?php

namespace MunDocente\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MunDocente\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function owner(User $userCurrent, User $userToEdit){
        return (($userCurrent->id == $userToEdit->id) || ($userCurrent->id == 1));
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
}
