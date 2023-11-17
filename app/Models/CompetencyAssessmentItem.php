<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencyAssessmentItem extends Model
{
    use HasFactory;

    protected $table = 'competency_assessment_items';

    protected $fillable = [
        'employee_id',
        'competency_assessment_id',
        'behavioral_indicator_id',
        'score',
        'assessment_type',
    ];

    public function assessment()
    {
        return $this->belongsTo(CompetencyAssessment::class, 'competency_assessment_id');
    }
    
     public function behavioralIndicator()
    {
        return $this->belongsTo(BehavioralIndicator::class, 'behavioral_indicator_id');
    }

    public function getCompetencyCategoryIdAttribute()
    {
        return $this->behavioralIndicator->competency->competency_category_id;
    }

    public function getBehavioralIndicatorLevelAttribute()
    {
        return $this->behavioralIndicator->level;
    }
}
