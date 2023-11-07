<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencySet extends Model
{
    use HasFactory;
    protected $table = 'competency_sets';
    protected $fillable = [
        'functional_group_id',
        'bureau_office_id',
        'position_id',
        'competency_id',
        'standard',
    ];

    public function competency()
    {
        return $this->belongsTo(Competency::class);
    }
}
