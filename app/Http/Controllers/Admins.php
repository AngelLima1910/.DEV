<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Admins extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']); 
    }

    public function index() {
        $titulo = 'Inicio';
        return view('modules/inicio/index', compact('titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function lista() 
    {
        $items = Alumno::all();
        $titulo = 'Listado de estudiantes';
        return view('modules/admin/index', compact('titulo', 'items'));
    }
    
    public function create()
    {
        $titulo = 'Agregar estudiante';
        return view('modules/admin/create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Alumno();
        $item->nombre = $request->nombre;
        $item->control = $request->control;
        $item->celular = $request->celular;
        $item->carrera = $request->carrera;
        $item->fecha_nac = $request->fecha_nac;
        $item->procedencia = $request->procedencia;
        $item->fecha_ingreso = $request->fecha_ingreso;
        $item->save();
        return redirect('/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = 'Eliminar registro';
        $items = Alumno::find($id);
        return view('modules/admin/delete', compact('titulo', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Editar registro';
        $items = Alumno::find($id);
        return view('modules/admin/edit', compact('titulo', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Alumno::find($id);
        $item->nombre = $request->nombre;
        $item->control = $request->control;
        $item->celular = $request->celular;
        $item->carrera = $request->carrera;
        $item->fecha_nac = $request->fecha_nac;
        $item->procedencia = $request->procedencia;
        $item->fecha_ingreso = $request->fecha_ingreso;
        $item->save();
        return redirect('/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Alumno::find($id);
        $item->delete();
        return redirect('/lista');
    }
}
