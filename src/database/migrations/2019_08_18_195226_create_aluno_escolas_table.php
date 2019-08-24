<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_escolas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('users')->onDelete('cascade');
            
            $table->integer('id_escolas')->unsigned();
            $table->foreign('id_escolas')->references('id')->on('escolas')->onDelete('cascade');

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
        Schema::dropIfExists('aluno_escolas');
    }
}
