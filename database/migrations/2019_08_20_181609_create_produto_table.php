<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('no_produto');
            $table->string('fabricante');
            $table->integer('qtde_produto');
            $table->string('codigo_produto',5);
            $table->integer('id_setor')->unsigned();
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_setor')->references('id_setor')->on('setor');
            $table->foreign('id_empresa')->references('id_empresa')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
