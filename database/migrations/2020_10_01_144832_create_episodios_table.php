<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('episodios', function (Blueprint $table) {
            
          $table->increments('id');
          $table->string('bimestre');
          $table->string('texto');
          $table->string('foto')->nullable();
          $table->string('eixo')->nullable();
          
          $table->integer('id_serie')->unsigned();
          $table->foreign('id_serie')->references('id')->on('series')->onDelete('cascade');

          $table->integer('id_personagem')->unsigned();
          $table->foreign('id_personagem')->references('id')->on('personagems')->onDelete('cascade');

          $table->string('url_jogo')->nullable();
          $table->string('url_video')->nullable();
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
        Schema::dropIfExists('episodios');
    }
}
