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

        // if($request['role'] == "admin"){
        //     AdminController::create($request->all());
        // }else if($request['role'] == "coordinator"){
        //     CoordinatorController::create($request->all());
        // }else if($request['role'] == "professor"){
        //     ProfessorController::create($request->all());
        // }

        return redirect()->route("welcome");
    }

    public function doRegisterStudent(Request $request){
        $validatedData = $request->validate([
            'cf' => 'required|size:16',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'role' => 'required|in:student'
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create($validatedData);
        Student::create($validatedData);

        return redirect()->route("welcome");
    }

    public function doLogin(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
