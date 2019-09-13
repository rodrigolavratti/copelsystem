<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number_aes');
            $table->string('contract_number');
            $table->string('project_number');
            $table->string('id_empreiteira');
            $table->string('data_start');
            $table->string('data_end');
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
        Schema::dropIfExists('aes');
    }
}
