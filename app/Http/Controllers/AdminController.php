<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function create(){
        return view('admins.create');
    } 
    public function store(Request $request){
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "cf" => "required",
        ]);
        Admin::create($validatedData);

        return redirect('/welcome');
    }
    public function modifica($id){
        return view('admins/modifica',[
            'admin'=>Admin::find($id)
        ]);
    }

    public function elimina($id){
        Admin::destroy($id);
        return redirect('/welcome');
    }
    public function update(Request $request, $id){
        $admin = Admin::find($id);
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "cf" => "required",

        ]);
        $admin->fill($validatedData);
        $admin->save();

        return redirect('/welcome');
    }

}
