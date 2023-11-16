<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name','short_name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function competencySets()
    {
        return $this->hasMany(CompetencySet::class);
    }

}

