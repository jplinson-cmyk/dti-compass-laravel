<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BehavioralIndicator extends Model
{
    protected $table = 'behavioral_indicators';

    protected $fillable = [
        'competency_id',
        'description',
        'level'
    ];

    public function competency()
    {
        return $this->belongsTo(Competency::class, 'competency_id');
    }

    public function competencyAssessmentItems()
    {
        return $this->hasMany(CompetencyAssessmentItem::class, 'behavioral_indicator_id');
    }
}
