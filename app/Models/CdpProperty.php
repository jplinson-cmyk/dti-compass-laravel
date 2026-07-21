<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdpProperty extends Model
{
    use HasFactory;

    protected $fillable = ['cdp_id', 'key', 'value'];

    public function careerDevelopmentPlan()
    {
        return $this->belongsTo(CareerDevelopmentPlan::class, 'cdp_id');
    }
}
