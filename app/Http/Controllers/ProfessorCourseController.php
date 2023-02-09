<?php

namespace App\Http\Controllers;

use App\Models\ProfessorCourse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfessorCourseController extends Controller
{   
    public function elimina($id){
        ProfessorCourse::destroy($id);
        return redirect('/welcome');
    }
    
}

