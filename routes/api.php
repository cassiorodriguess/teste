<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;
use App\http\Controllers\CidadeController;
use App\http\Controllers\MarcasController;


Route::controller(ProdutoController::class)->group(function () {
    Route::post('inserir-produto', 'inserirProduto');
    Route::get('listar-produtos', 'listarProduto');
    Route::get('produto/{id}', 'getProduto');
    Route::put('update-produto/{id}', 'updateProduto');
    Route::delete('delete-produto/{id}', 'deleteProduto');
});

Route::get('/cidades', [CidadeController::class, 'listarCidades']);
Route::get('/marcas', [MarcasController::class, 'listarMarcas']);
