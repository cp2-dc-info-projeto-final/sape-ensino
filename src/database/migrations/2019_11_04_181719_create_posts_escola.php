<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsEscola extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_escola', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
            
            $table->integer('id_escola')->unsigned();
            $table->foreign('id_escola')->references('id')->on('escolas')->onDelete('cascade');

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
        Schema::dropIfExists('posts_escola');
    }
}
