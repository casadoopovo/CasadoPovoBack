<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropositurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposituras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('secao_vereador_id');
            $table->string('titulo');
            $table->string('resumo');
            $table->string('anexo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposituras');
    }
}
