<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        $titulo = 'Login'; 
        return view('modules/auth/index', compact('titulo'));
    }
    public function logear(Request $request){
        $credenciales = $request->only("user", "password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('inicio');
        } else {
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');

    }
}
