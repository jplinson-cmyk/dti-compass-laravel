<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDevelopmentPlan extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'competency_assessment_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function competencyAssessment()
    {
        return $this->belongsTo(CompetencyAssessment::class);
    }

    public function cdpProperties()
    {
        return $this->hasMany(CdpProperty::class, 'cdp_id');
    }

    public function developmentActivities()
    {
        return $this->hasMany(DevelopmentActivity::class, 'cdp_id');
    }

    public function getPropertyByKey($key)
    {
        return $this->cdpProperties->where('key', $key)->first();
    }
}
