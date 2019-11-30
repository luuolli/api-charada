<?php

namespace App\Http\Controllers;

use App\Piada;
use Illuminate\Http\Request;

class PiadaController extends Controller
{
    public function random()
    {
        $index = Piada::count();
        $index = rand(1, $index);
        return $this->show($index);
    }

    public function show(int $id)
    {
        $piada = Piada::where('id', $id)->first();
        return $piada ?
            response()->json($piada, 200) :
            response()->json('Nada aqui', 400);
    }
}
