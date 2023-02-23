<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CoordinatorController extends Controller
{
    public function index($coordinatorId){
        $coordinator = Coordinator::find($coordinatorId);

        return view('coordinators.home',[
            'coordinator'=>$coordinator
        ]);
    }

    public function create(){
        return view('coordinators.create');
    }
    public function store(Request $request){
        $coordinator = new Coordinator();
        $coordinator->name = $request->name;
        $coordinator->surname = $request->surname;
        $coordinator->save();

        return redirect('/welcome');
    }
    public function modifica($id){
        return view('coordinators.edit',[
            'coordinator'=>Coordinator::find($id)
        ]);
    }

    public function elimina($id){
        Coordinator::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $coordinator = Coordinator::find($id);
        $coordinator->name = $request->name;
        $coordinator->surname = $request->surname;
        $coordinator->save();
        return redirect('/welcome');
    }
}
