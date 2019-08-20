<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsavelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->increments('id_responsavel');
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_cargo')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->string('no_responsavel');
            $table->date('data_nascimento_responsavel');
            $table->foreign('id_empresa')->references('id_empresa')->on('empresa');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargo');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsavel');
    }
}
