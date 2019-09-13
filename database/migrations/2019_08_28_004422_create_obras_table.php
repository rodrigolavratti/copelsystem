<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_number');
            $table->string('registro_fiscal');
            $table->string('aes_number');
            $table->string('nome_empreiteira');
            $table->string('tipo_de_obra');
            $table->string('pde_number');
            $table->string('observacoes');
            $table->string('data_execucao');
            $table->string('data_liberacao');
            $table->string('data_envio_geo');
            $table->string('data_vistoria');
            $table->string('data_fechamento');
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
        Schema::dropIfExists('obras');
    }
}
