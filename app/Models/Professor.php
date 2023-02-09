<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function professorCourses()
    {
        return $this->hasMany(ProfessorCourse::class);
    }

    public function valutations()
    {
        return $this->hasMany(Valutation::class);
    }



}
