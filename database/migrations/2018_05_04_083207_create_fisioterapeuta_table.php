<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisioterapeutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisioterapeuta', function (Blueprint $table) {
            $table->increments('id_fisioterapeuta');
            $table->string('nome_fisioterapeuta', 45);
            $table->string('crefito_fisioterapeuta', 45)->unique();
            $table->string('login_fisioterapeuta', 45)->unique();
            $table->string('senha_fisioterapeuta', 45);
            $table->string('rg_fisioterapeuta', 45);
            $table->date('datanas_fisioterapeuta');
            $table->string('area_fisioterapeuta', 45);
            $table->string('endereco_fisioterapeuta', 45);
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
        Schema::dropIfExists('fisioterapeuta');
    }
}
