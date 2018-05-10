<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('sobrenome', 45);
            $table->string('cpf', 45)->unique();
            $table->string('telefone', 45);
            $table->string('endereco', 45);
            $table->date('datanascimento');
            $table->string('profissao', 45);
            $table->string('atividades', 45);
            $table->string('login', 45)->unique();
            $table->string('senha', 45);
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
        Schema::dropIfExists('paciente');
    }
}
