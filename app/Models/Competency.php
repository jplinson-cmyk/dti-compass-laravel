<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    protected $table = 'competencies';

    protected $fillable = [
        'competency_category_id',
        'name',
        'description'
    ];
}
