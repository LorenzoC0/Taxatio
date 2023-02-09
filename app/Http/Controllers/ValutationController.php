<?php

namespace App\Http\Controllers;

use App\Models\Valutation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ValutationController extends Controller
{   


    public function create(){
        return view('valutations.create');
    } 
    public function store(Request $request, $id_student){
        
        $validatedData = $request->validate([
            "grade" => "required",
            "comment" => "required",
            "status" => "required",
            "professor_id" => "required",
            
        ]);
        
        $student_id_hash = Hash::make($id_student);
        $validatedData['student_id_hash'] = $student_id_hash;
        Valutation::create($validatedData);
        return redirect('/welcome');
    }
    public function modifica($id){
        return view('valutations.edit',[
            'valutation'=>Valutation::find($id)
        ]);
    }

    public function elimina($id){
        valutation::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id, $id_student){
        $valutation = Valutation::find($id);

        $validatedData = $request->validate([
            "grade" => "required",
            "comment" => "required",
            "status" => "required",
            "professor_id" => "required",
        ]);
        
        $student_id_hash = Hash::make($id_student);
        $validatedData['student_id_hash'] = $student_id_hash;
        $valutation->fill($validatedData);
        $valutation->save();

        return redirect('/welcome');
    }
}
