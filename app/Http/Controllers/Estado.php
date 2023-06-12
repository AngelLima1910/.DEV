<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;
Use Alert;

class Estado extends Controller
{
    public function actualizarStatus($id) {
        $item = Credito::find($id);
        $estatus = 0;
        if ($item->id_estatus === 1) {
            $estatus = 2;
        }
        $item->id_estatus = $estatus;
        $item->save();
        toast('Status actualizado con exito!','success');
        return redirect('liberacionCreditos/creditos');
    }
}
