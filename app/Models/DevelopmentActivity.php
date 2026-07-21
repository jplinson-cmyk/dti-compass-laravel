<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'cdp_id', 'competency_id', 'employee_id', 'supervisor_id', 'percent_criteria', 'term', 
        'action', 'target_date','by_whom' ,'status', 'supervisor_notes'
    ];

    public function careerDevelopmentPlan()
    {
        return $this->belongsTo(CareerDevelopmentPlan::class, 'cdp_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function competency()
    {
        return $this->belongsTo(Competency::class);
    }
}
