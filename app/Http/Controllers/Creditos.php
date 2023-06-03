<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\catCredito;
use App\Models\Credito;
use App\Models\Periodo;
use Illuminate\Http\Request;

class Creditos extends Controller
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

    public function index()
    {
        $titulo = 'Creditos';
        $items3 = Credito::all();
        return view('modules/admin/creditos/index', compact('titulo', 'items3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregarCredito()
    {
        $titulo = 'Agregar creditos';
        $items = catCredito::all();
        $items2 = Alumno::all();
        $items4 = Periodo::all();
        return view('modules/admin/creditos/create', compact('titulo', 'items', 'items2', 'items4'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function guardarArchivos(Request $request)
    {
        $item = new Credito();
        $item->credito = $request->credito;
        $item->mooc = $request->file('mooc')->store('public');
        $item->evidencia = $request->file('evidencia')->store('public');
        $item->estudiante = $request->estudiante;
        $item->periodo = $request->periodo;
        $item->estatus = $request->estatus;
        $item->carpeta = $request->carpeta;
        $item->fecha_registro = $request->fecha_registro;
        $item->save();
        return redirect('/creditos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarArchivos($id)
    {
        $titulo = 'Actualizar creditos';
        $items = catCredito::find($id);
        $items2 = Alumno::find($id);
        $items4 = Periodo::find($id);
        return view('modules/admin/creditos/edit', compact('titulo', 'items', 'items2', 'items4'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizarArchivos(Request $request, $id)
    {
        $item = Credito::find($id);
        $item->credito = $request->credito;
        $item->mooc = $request->file('mooc')->store('public');
        $item->evidencia = $request->file('evidencia')->store('public');
        $item->estudiante = $request->estudiante;
        $item->periodo = $request->periodo;
        $item->estatus = $request->estatus;
        $item->carpeta = $request->carpeta;
        $item->fecha_registro = $request->fecha_registro;
        $item->save();
        return redirect('/creditos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
