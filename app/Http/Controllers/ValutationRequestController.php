<?php

namespace App\Http\Controllers;

use App\Models\ValutationRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ValutationRequestController extends Controller
{   

    public function create(){
        return view('valutationRequests.create');
    } 
    public function store(Request $request){
        $validatedData = $request->validate([
            "course_id" => "required",
            "is_active" => "required",
        ]);
        ValutationRequest::create($validatedData);
        return redirect('/welcome');
    }
    public function modifica($id){
        return view('valutationRequests.edit',[
            'valutationRequest'=>ValutationRequest::find($id)
        ]);
    }

    public function elimina($id){
        ValutationRequest::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $valutationRequest = ValutationRequest::find($id);
        $validatedData = $request->validate([
            "course_id" => "required",
            "is_active" => "required",
        ]);
        $valutationRequest->fill($validatedData);
        $valutationRequest->save();

        return redirect('/welcome');
    }
}


