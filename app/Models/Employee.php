<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'employee_id_number',
        'email',
        'gender',
        'employment_status',
        'functional_group',
        'bureau_office',
        'division',
        'immediate_supervisor',
        'position',
        'job_level',
        'last_review_at',
    ];
}
