<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencyCategory extends Model
{
    use HasFactory;

    protected $table = 'competency_categories';

    protected $fillable = [
        'category_name'
    ];

    public function competencies()
    {
        return $this->hasMany(Competency::class, 'competency_category_id');
    }

}
