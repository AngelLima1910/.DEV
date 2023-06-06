<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\catCredito;
use App\Models\Credito;
use App\Models\Estado;
use App\Models\listadoCreditos;
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
        $items3 = listadoCreditos::all();
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
        $items6 = Estado::all();
        return view('modules/admin/creditos/create', compact('titulo', 'items', 'items2', 'items4', 'items6'));
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
        $item->id_creditos = $request->credito;
        $item->credito = $request->credito;
        if ($request->hasFile("mooc")) {
            $file = $request->file("mooc");
            $file->move(public_path().'/pdf/', $file->getClientOriginalName());
            $item->mooc = $file->getClientOriginalName();          
        }
        if ($request->hasFile("evidencia")) {
            $file = $request->file("evidencia");
            $file->move(public_path().'/pdf/', $file->getClientOriginalName());
            $item->evidencia = $file->getClientOriginalName();          
        }
        $item->id_alumnos = $request->estudiante;
        $item->estudiante = $request->estudiante;
        $item->id_periodos = $request->periodo;
        $item->periodo = $request->periodo;
        $item->id_estatus = $request->estatus;
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
    public function mostrarCreditos($id)
    {
        $titulo = 'Eliminar registro';
        $items = Credito::find($id);
        return view('modules/admin/creditos/delete', compact('titulo', 'items'));
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
        $items = Credito::find($id);
        $items2 = catCredito::all();
        $items4 = Alumno::all();
        $items5 = Periodo::all();
        $items6 = Estado::all();
        return view('modules/admin/creditos/edit', compact('titulo', 'items', 'items2', 'items4', 'items5', 'items6'));
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
        $item->id_creditos = $request->credito;
        $item->credito = $request->credito;
        if ($request->hasFile("mooc")) {
            $file = $request->file("mooc");
            $file->move(public_path().'/pdf/', $file->getClientOriginalName());
            $item->mooc = $file->getClientOriginalName();          
        }
        if ($request->hasFile("evidencia")) {
            $file = $request->file("evidencia");
            $file->move(public_path().'/pdf/', $file->getClientOriginalName());
            $item->evidencia = $file->getClientOriginalName();          
        }
        $item->id_alumnos = $request->estudiante;
        $item->estudiante = $request->estudiante;
        $item->id_periodos = $request->periodo;
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
    public function eliminarCreditos($id, $file)
    {
        $item = Credito::find($id);
        unlink(public_path('/pdf/' . $file->mooc));
        unlink(public_path('/pdf/' . $file->evidencia));
        $item->delete();
        return redirect('/creditos');
    }
}
