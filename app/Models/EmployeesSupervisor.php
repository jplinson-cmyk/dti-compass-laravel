<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesSupervisor extends Model
{
    use HasFactory;
    protected $table = 'employees_supervisors';

    protected $fillable = [
        'employee_id',
        'supervisor_id',
    ];

}
