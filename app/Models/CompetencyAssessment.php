<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencyAssessment extends Model
{
    use HasFactory;

    protected $table = 'competency_assessments';

    protected $fillable = [
        'employee_id',
        'session_type',
        'assessor_id',
        'status',
        'current_page',
        'date_started',
        'date_completed',
    ];

    public function items()
    {
        return $this->hasMany(CompetencyAssessmentItem::class, 'competency_assessment_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function getCompetencyItemsByCategory($categoryId)
    {
        return $this->items->where('competency_category_id', $categoryId);
    }

    public function getAnsweredItemsAttribute()
    {
        //return $this->items()->whereNotNull('score')->get();
        //return $this->items->where('score');
        return $this->items->filter(function ($item, $key) {
            return $item->score != null;
        });
    }

    public function getUnansweredItemsAttribute()
    {
        return $this->items()->whereNull('score')->get(); // create query within the database
        //return $this->items->where('score', NULL);  // query all and filters collections based on the condition
    }

}
