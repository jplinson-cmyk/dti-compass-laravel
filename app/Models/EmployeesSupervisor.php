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

    /**
     * Get the supervisor (Employee model) associated with this relationship.
     */
    public function supervisor()
    {
        return $this->belongsTo(Employee::class, 'supervisor_id');
    }

    /**
     * Get the employee (Employee model) associated with this relationship.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
