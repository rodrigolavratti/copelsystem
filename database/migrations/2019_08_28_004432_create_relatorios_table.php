<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_number');
            $table->string('registro_fiscal');
            $table->string('municipio');
            $table->string('tipo_de_obra');
            $table->string('tipo_de_contrato');
            $table->string('observacoes');
            $table->string('nome_fiscal');
            $table->string('nome_empreiteira');
            $table->string('prazo_aneel');
            $table->string('data_do_aceite');
            $table->string('data_pde');
            $table->string('prazo_restante');
            $table->string('data_de_execucao');
            $table->string('prazo_comunicado_execucao');
            $table->string('data_de_liberacao');
            $table->string('prazo_de_liberacao');
            $table->string('data_envio_geo');
            $table->string('prazo_envio_geo');
            $table->string('data_vistoria');
            $table->string('prazo_vistoria');
            $table->string('data_fechamento');
            $table->string('prazo_fechamento');
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
        Schema::dropIfExists('relatorios');
    }
}
