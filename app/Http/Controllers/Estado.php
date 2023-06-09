<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;

class Estado extends Controller
{
    public function actualizarStatus(Request $request, $id) {
        $item = Credito::find($id);
        $estatus = 0;
        dd($request->id_estatus);
        if ($request->id_estatus === 1) {
            $estatus = 2;
        } else {
            $estatus = 1;
        }
        $item->id_estatus = $estatus;
        $item->save();
        return redirect('/creditos');
    }
}
