<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimento', function (Blueprint $table) {
            $table->increments('id_procedimento');
            $table->string('nome_procedimento', 45);
            $table->string('especificacao_procedimento', 255);
            $table->string('objetivo_procedimento', 45);
            $table->integer('id_plano_fk');
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
        Schema::dropIfExists('procedimento');
    }
}
