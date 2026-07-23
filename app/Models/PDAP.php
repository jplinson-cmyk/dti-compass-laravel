<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDAP extends Model
{
    use HasFactory;

    protected $table = 'pdap';

    protected $fillable = [
        'competency_assessment_id',
        'action_plan',
        'timeline',
        'job_family_competency_id',
        'job_family_id',
        'priority_a',
        'priority_b',
        'priority_c',
        'priority_d',
        'skills_to_acquire',
        'supervisor_notes',
        'experience_action',
        'experience_measures',
        'experience_by_whom',
        'experience_status',
        'experience_supervisor_notes',
        'exposure_action',
        'exposure_measures',
        'exposure_by_whom',
        'exposure_status',
        'exposure_supervisor_notes',
        'education_action',
        'education_measures',
        'education_by_whom',
        'education_status',
        'education_supervisor_notes'
    ];

    public function jobFamily()
    {
        return $this->belongsTo(JobFamily::class, 'job_family_id');
    }

    public function jobFamilyCompetency()
    {
        return $this->belongsTo(JobFamilyCompetency::class, 'job_family_competency_id');
    }
}
