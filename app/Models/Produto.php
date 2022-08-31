<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_produto',
        'nome_produto',
        'valor',
        'marca_produto',
        'estoque',
        'cidade'
    ];
}
