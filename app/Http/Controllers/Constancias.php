<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Constancia;
use App\Models\listadoConstancia;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Constancias extends Controller
{
    public function index() {
        $titulo = 'Constancias';
        $items = listadoConstancia::all();
        return view('modules/admin/constancias/index', compact('titulo', 'items'));
    }

    public function pdf(Request $request, $id) {
        $request->$id = $id;
        $recogerData = listadoConstancia::find($id);
        $pdf = Pdf::loadView('modules/admin/constancias.pdf', compact('recogerData'));
        return $pdf->download('creditos.pdf');

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
        return redirect('/constancias');
    }
}
