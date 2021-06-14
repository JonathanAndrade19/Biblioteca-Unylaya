<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->integer('id_autor')->unsigned();
            $table->foreign('id_autor')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('genero_literario');
            $table->string('editora');
            $table->string('titulo');
            $table->date('ano_lancamento');
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
        Schema::dropIfExists('livros');
    }
}
