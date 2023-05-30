<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\catCredito;
use App\Models\Credito;
use Illuminate\Http\Request;

class Creditos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Creditos';
        return view('modules/admin/creditos/index', compact('titulo'));
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
        return view('modules/admin/creditos/create', compact('titulo', 'items', 'items2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function mform() {
        return view('mform');
    }

    public function mguardar(Request $request) {
        if ($request->hasFile("urlpdf")) {
            $file=$request->file("urlpdf");
            $mooc = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("pdf/".$mooc);
            if ($file->guessExtension()=="pdf") {
                copy($file, $ruta);
            } else {
                dd("No es un archivo PDF");
            }
        }
    }
    
    public function guardarArchivos(Request $request)
    {
        $item = new Credito();
        $item->credito = $request->credito;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
