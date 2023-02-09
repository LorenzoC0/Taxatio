<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class courseController extends Controller
{   


    public function create(){
        return view('courses.create');
    } 
    public function store(Request $request){
        $course = new Course();

        $course->name = $request->name;
        $course->year = $request->year;
        $course->description = $request->description;
        $course->save();

        return redirect('/welcome');
    }
    public function modifica($id){
        return view('courses.edit',[
            'course'=>Course::find($id)
        ]);
    }

    public function elimina($id){
        Course::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $course = Course::find($id);

        $course->name = $request->name;
        $course->year = $request->year;
        $course->description = $request->description;
        $course->save();

        return redirect('/welcome');
    }
}

