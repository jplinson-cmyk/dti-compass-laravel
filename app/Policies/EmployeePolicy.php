<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Employee $employee){
        return $user->can("employees.update") || ($user->userable instanceof Employee && $user->userable_id == $employee->id) ;
    }
    public function edit(User $user, Employee $employee){
        return $user->can("employees.edit") || ($user->userable instanceof Employee && $user->userable_id == $employee->id) ;
    }    
}
