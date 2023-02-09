<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfessorController extends Controller
{   


    public function create(){
        return view('professors.create');
    } 
    public function store(Request $request){
        $professor = new Professor();

        $professor->name = $request->name;
        $professor->surname = $request->surname;
        $professor->topic = $request->topic;
        $professor->save();

        return redirect('/welcome');
    }
    public function modifica($id){
        return view('professors.edit',[
            'professor'=>professor::find($id)
        ]);
    }

    public function elimina($id){
        professor::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $professor = professor::find($id);

        $professor->name = $request->name;
        $professor->surname = $request->surname;
        $professor->topic = $request->topic;
        $professor->save();

        return redirect('/welcome');
    }
}
