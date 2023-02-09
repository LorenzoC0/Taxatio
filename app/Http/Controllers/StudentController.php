<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{   


    public function create(){
        return view('students.create');
    } 
    public function store(Request $request){
        $student = new Student();

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->valutation_done = $request->valutation_done;
        $student->save();

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

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->valutation_done = $request->valutation_done;
        $student->save();

        return redirect('/welcome');
    }
}
