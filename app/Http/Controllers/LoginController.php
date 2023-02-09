<?php

namespace App\Http\Controllers;

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

    public function doRegister(Request $request){
        $validatedData = $request->validate([
            'cf' => 'required|size:16',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create($validatedData);

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
