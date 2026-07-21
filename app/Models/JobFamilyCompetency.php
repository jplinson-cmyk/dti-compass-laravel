<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFamilyCompetency extends Model
{
    use HasFactory;

    protected $fillable = ['job_family_id', 'name']; // Ensure 'name' is fillable

    /**
     * Define the relationship: JobFamilyCompetency belongs to JobFamily
     */
    public function jobFamily()
    {
        return $this->belongsTo(JobFamily::class, 'job_family_id');
    }
}
