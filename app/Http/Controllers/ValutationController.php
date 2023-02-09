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
        $valutation = new Valutation();

        $valutation->grade = $request->grade;
        $valutation->comment = $request->comment;
        $valutation->student_id_hash = Hash::make($id_student);
        $valutation->status = $request->status;
        $valutation->save();

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
    public function update(Request $request, $id){
        $valutation = Valutation::find($id);

        $valutation->grade = $request->grade;
        $valutation->comment = $request->comment;
        $valutation->status = $request->status;
        $valutation->save();

        return redirect('/welcome');
    }
}
