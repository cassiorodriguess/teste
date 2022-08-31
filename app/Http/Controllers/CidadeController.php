<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{

    public function listarCidades(){
        
        $cidades = Cidade::all();
        return $cidades;    

    }

}
