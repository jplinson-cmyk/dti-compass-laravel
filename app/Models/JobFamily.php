<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFamily extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Ensure 'name' column is fillable

    /**
     * Define the relationship: JobFamily has many JobFamilyCompetencies
     */
    public function competencies()
    {
        return $this->hasMany(JobFamilyCompetency::class, 'job_family_id');
    }
}
