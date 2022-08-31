<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{
    public function listarMarcas(){
        
        $marcas = Marca::all();
        return $marcas;    

    }
}
