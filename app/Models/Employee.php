<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'suffix', 'email', 'employee_id', 'gender',
        'employment_status_id', 'functional_group_id', 'bureau_office_id', 'division_id',
        'position_id', 'job_level_id', 'immediate_supervisor', 'last_review_at',
        'disability',
        'indigenous',
        'ip_group',
        'civil_status',
        'religion',
    ];


    public function employmentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_status_id');
    }

    public function functionalGroup()
    {
        return $this->belongsTo(FunctionalGroup::class, 'functional_group_id');
    }

    public function bureauOffice()
    {
        return $this->belongsTo(BureauOffice::class, 'bureau_office_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function jobLevel()
    {
        return $this->belongsTo(JobLevel::class, 'job_level_id');
    }

    public function supervisors()
    {
        return $this->belongsToMany(Employee::class, 'employees_supervisors', 'employee_id', 'supervisor_id');
    }

    public function supervisedEmployees()
    {
        return $this->belongsToMany(Employee::class, 'employees_supervisors', 'supervisor_id', 'employee_id');
    }

    public function user()
    {
        return $this->morphOne(User::class, "userable");
    }

    public function competencyAssessments()
    {
        return $this->hasMany(CompetencyAssessment::class, 'employee_id');
    }

    public function getCurrentCompetencyAssessmentAttribute()
    {
        return $this->competencyAssessments->where('status', 'in_progress')->first();
    }

    public function getLastCompetencyAssessmentAttribute()
    {
        return $this->competencyAssessments->sortByDesc('id')->first();
    }
}
