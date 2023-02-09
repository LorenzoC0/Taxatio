<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CoordinatorController extends Controller
{   


    public function create(){
        return view('coordinator.create');
    } 
    public function store(Request $request){
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "cf" => "required",
        ]);
        Coordinator::create($validatedData);
        return redirect('/coordinator/home');
    }
    public function modifica($id){
        return view('coordinators.edit',[
            'coordinator'=>Coordinator::find($id)
        ]);
    }

    public function elimina($id){
        Coordinator::destroy($id);
        return redirect('/coordinator/home');
    }
    public function update(Request $request, $id){
        $coordinator = Coordinator::find($id);
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "cf" => "required",

        ]);
        $coordinator->fill($validatedData);
        $coordinator->save();
        return redirect('/coordinator/home');
    }
}
