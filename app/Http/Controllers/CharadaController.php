<?php

namespace App\Http\Controllers;

use App\Charada;
use Illuminate\Http\Request;

class CharadaController extends Controller
{
    public function page($page){
        return Charada::all();
    }
    public function random()
    {
        $index = Charada::count();
        $index = rand(1, $index);
        return $this->show($index);
    }

    public function show(int $id)
    {
        $charada = Charada::where('id', $id)->first();
        return $charada ?
            response()->json($charada, 200) :
            response()->json('Nada aqui', 400);
    }
}
