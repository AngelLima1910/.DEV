<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        $titulo = 'Login'; 
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('modules/auth/index', compact('titulo'));
    }
    public function logear(Request $request){
        $credenciales = $request->only("user", "password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('inicio');
        } else {
            toast('Usuario y/o  password incorrectos!','error');
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');
    }
    public function agregarUsuario() {
        $item = new User();
        $item->name = 'admin';
        $item->email = 'angellima200@hotmail.com';
        $item->user = 'admin';
        $item->password = Hash::make('admin');
        $item->save();
        return $item;
    }
}
