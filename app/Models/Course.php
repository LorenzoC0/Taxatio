<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function professorCourses()
    {
        return $this->hasMany(ProfessorCourse::class);
    }

    public function coordinators()
    {
        return $this->belongsTo(Coordinator::class);
    }
}
