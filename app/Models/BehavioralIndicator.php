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


}
