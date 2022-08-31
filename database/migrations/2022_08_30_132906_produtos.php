<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('cod_produto');
            $table->string("nome_produto");
            $table->double("valor");
            $table->integer("marca_produto");
            $table->float("estoque");
            $table->integer("cidade");
            $table->foreign('marca_produto')->references('cod_marca')->on('marcas');
            $table->foreign('cidade')->references('cod_cidade')->on('cidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
