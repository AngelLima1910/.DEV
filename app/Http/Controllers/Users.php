<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function agregarUsuario(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->user = $request->user;
        $item->password = Hash::make($request->password);
        $item->save();
        // Alert::success('Agregado con exito', ':)');
        return redirect()->route('auth-login');
    }
}
