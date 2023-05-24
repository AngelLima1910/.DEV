<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clients extends Controller
{
    public function index() {
        $titulo = 'Inicio';
        return view('modules/inicio/index', compact('titulo'));
    }
}
