<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPermissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_permissao', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_permissao')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->foreign('id_permissao')->references('id_permissao')->on('permissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_permissao');
    }
}
