<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Coordinator;
use App\Models\Professor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }

    public function doRegisterUser(Request $request){
        $validatedData = $request->validate([
            'cf' => 'required|size:16',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'role' => 'required|in:admin,coordinator,professor'
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create($validatedData);

        if($request['role'] == "admin"){
            Admin::create($request->all());
        }else if($request['role'] == "coordinator"){
            Coordinator::create($request->all());
        }else if($request['role'] == "professor"){
            Professor::create($request->all());
        }


        return redirect('/home');
    }

    public function doRegisterStudent(Request $request){
        $validatedData = $request->validate([
            'cf' => 'required|size:16',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'role' => 'required|in:student'
        ]);

        $validatedData['role'] = "student";
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        Student::create($request->validate([
            'cf'=> 'required|size:16',
        ]));

        return redirect('/attesa');
    }

    public function doLogin(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', "email"],
            'password' => ['required']
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Le credenziali non sono corrette.',
        ])->onlyInput('email');
    }
}
