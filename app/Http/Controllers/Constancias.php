<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Constancia;
use App\Models\listadoConstancia;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class Constancias extends Controller
{
    public function index() {
        $titulo = 'Constancias';
        $items = listadoConstancia::all();
        return view('modules/admin/constancias/index', compact('titulo', 'items'));
    }

    public function pdf($id) {
        $recogerData = listadoConstancia::find($id);        
        $pdf = PDF::loadView('modules/admin/constancias.pdf', compact('recogerData'));
        return $pdf->download('constancia.pdf');

    }

    public function agregarConstancia() {
        $titulo = 'Agregar constancias';
        $items2 = Alumno::all();
        $items4 = Periodo::all();
        return view('modules/admin/constancias/create', compact('titulo', 'items2', 'items4'));
    }

    public function guardarConstancia(Request $request) {
        $item = new Constancia();
        $item->id_alumnos = $request->estudiante;
        $item->estudiante = $request->estudiante;
        $item->id_alumnos = $request->control;
        $item->control = $request->control;
        $item->id_periodos = $request->periodo;
        $item->periodo = $request->periodo;
        $item->actividad = $request->actividad;
        $item->fecha = $request->fecha;
        $item->grupo = $request->grupo;
        $item->hrsAcreditadas = $request->hrsAcreditadas;
        $item->save();
        toast('Constancia agregada con exito!','warning');
        return redirect('liberacionesConstancias/constancias');
    }

    public function editarConstancias($id)
    {
        $titulo = 'Editar registro';
        $items = Constancia::find($id);
        $items2 = Alumno::all();
        $items4 = Periodo::all();
        return view('modules/admin/constancias/edit', compact('titulo', 'items', 'items2', 'items4'));
    }


    public function actualizarConstancias(Request $request, $id)
    {
        $item = Constancia::find($id);
        $item->id_alumnos = $request->estudiante;
        $item->estudiante = $request->estudiante;
        $item->id_alumnos = $request->control;
        $item->control = $request->control;
        $item->id_periodos = $request->periodo;
        $item->periodo = $request->periodo;
        $item->actividad = $request->actividad;
        $item->fecha = $request->fecha;
        $item->grupo = $request->grupo;
        $item->hrsAcreditadas = $request->hrsAcreditadas;
        $item->save();
        toast('Constancia actualizado con exito!','warning');
        return redirect('liberacionesConstancias/constancias');
    }
}
