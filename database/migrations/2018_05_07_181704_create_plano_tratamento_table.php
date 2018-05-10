<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoTratamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_tratamento', function (Blueprint $table) {
            $table->increments('id_plano');
            $table->integer('quantsessoes_plano');
            $table->integer('id_paciente_fk');
            $table->integer('id_fisioterapeuta_fk');
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
        Schema::dropIfExists('plano_tratamento');
    }
}
