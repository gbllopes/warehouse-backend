<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id_empresa',11);
            $table->string('no_razao_social',100);
            $table->string('sigla_empresa',10);
            $table->string('nr_cnpj_empresa', 14);
            $table->string('telefone_empresa', 12);
            $table->string('email_empresa', 100);
            $table->date('data_fundacao_empresa');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
