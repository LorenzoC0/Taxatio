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
        $valutationRequest = new ValutationRequest();
        $valutationRequest->is_active = $request->is_active;
        $valutationRequest->save();

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

        $valutationRequest->name = $request->name;
        $valutationRequest->is_active = $request->is_active;
        $valutationRequest->save();

        return redirect('/welcome');
    }
}


