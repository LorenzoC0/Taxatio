<?php

namespace App\Http\Controllers;

use App\Models\Valutation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ValutationController extends Controller
{


    public function create()
    {
        return view('valutations.create');
    }
    public function store(Request $request, $id_student)
    {
        $validatedData = $request->validate([
            'grade' => 'required|numeric|min:18|max:30',
            'comment' => 'required',
            'status' => 'required|in:approved,not approved',
            'professor_id' => 'required|numeric',
        ]);

        $validatedData['student_id'] = $id_student;


        return redirect('/welcome');
    }
    public function modifica($id)
    {
        return view('valutations.edit', [
            'valutation' => Valutation::find($id)
        ]);
    }

    public function elimina($id)
    {
        valutation::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id)
    {
        $valutation = Valutation::find($id);

        $valutation->grade = $request->grade;
        $valutation->comment = $request->comment;
        $valutation->status = $request->status;
        $valutation->save();

        return redirect('/welcome');
    }
}
