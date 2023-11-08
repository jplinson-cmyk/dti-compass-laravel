<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencySet extends Model
{
    protected $table = 'competency_sets';

    protected $fillable = [
        'functional_group_id',
        'bureau_office_id',
        'division_id',
        'position_id'.
        'competency_id',
        'standard'
    ];
    

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

    public function competency()
    {
        return $this->belongsTo(Competency::class, 'competency_id');
    }



}
