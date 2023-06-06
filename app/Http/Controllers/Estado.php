<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;

class Estado extends Controller
{
    public function actualizarStatus(Request $request, $id) {
        $estatus=0;
        if ($request->estatus === 1) {
            $estatus = 0;
        } else {
            $estatus = 1;
        }
        $item = Credito::find($id);
        $item->estatus = $estatus;
        $item->save();
        return redirect('/creditos');
    }
}
