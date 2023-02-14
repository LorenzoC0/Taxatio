<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    public function index($studentId){
        $student = Student::find($studentId);

        return view('students.home',[
            'student'=>$student
        ]);
    }

    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "valutation_done" => "required",
            "cf" => "required",
            "course_id"=>"required",
        ]);
        Student::create($validatedData);
        return redirect('/welcome');
    }
    public function modifica($id){
        return view('students.edit',[
            'student'=>Student::find($id)
        ]);
    }

    public function elimina($id){
        Student::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $student = Student::find($id);

        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "valutation_done" => "required",
            "cf" => "required",
            "course_id"=>"required",
        ]);
        $student->fill($validatedData);
        $student->save();

        return redirect('/welcome');
    }
}
