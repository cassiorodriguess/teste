<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function inserirProduto(Request $request){

        // $request->validate([
        //     'cod_produto' =>'unique:produtos'
        // ]);

        $produto = DB::table('produtos')
            ->where("cidade","=",$request->cidade)
            ->where("cod_produto","=",$request->cod_produto)
            ->count();


        if($produto > 0){
            return response()->json("Este produto já está cadastrado nesta cidade.",422);
        }    

        $produto = Produto::create($request->all());
        return $produto;    
        
    }

    public function listarProduto(){
        
        $produto = DB::table('produtos')
            ->join('cidades', 'produtos.cidade', '=', 'cidades.cod_cidade')
            ->join('marcas','produtos.marca_produto','=','marcas.cod_marca')
            ->get();

        return $produto;    

    }

    public function getProduto($id){

        if(is_numeric($id)){
            
            $produto = DB::table("produtos")
            ->join('cidades', 'produtos.cidade', '=', 'cidades.cod_cidade')
            ->join('marcas','produtos.marca_produto','=','marcas.cod_marca')
            ->where("cod_produto",'=',$id)
            ->get();

            return $produto;

        }else{
        
            $produto = DB::table("produtos")
            ->join('cidades', 'produtos.cidade', '=', 'cidades.cod_cidade')
            ->join('marcas','produtos.marca_produto','=','marcas.cod_marca')
            ->where("nome_produto",'LIKE',"%{$id}%")
            ->orWhere("nome_cidade",'LIKE',"%{$id}%")
            ->get();

            return $produto;
           
        }

      
    }

    public function updateProduto(Request $request,$id){

        $produto = DB::table("produtos")
            ->where("cod_produto",'=',$id)
            ->update([
                    'nome_produto' => $request->nome_produto,
                    'valor' => $request->valor,
                    'marca_produto' => $request->marca_produto,
                    'estoque' => $request->estoque,
                    'cidade' => $request->cidade]);
    
        return $produto;
    }

    public function deleteProduto($id){

        $deleted = DB::table('produtos')->where('cod_produto', '=', $id)->delete();
        return $deleted; 

    }

}
