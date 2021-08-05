<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('series', function (Blueprint $table) {
            
          $table->increments('id');
          $table->string('serie');
          $table->string('texto');
          $table->string('capa');
          $table->string('eixo')->nullable();
          $table->integer('id_personagem')->unsigned();
          $table->foreign('id_personagem')->references('id')->on('personagems')->onDelete('cascade');
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
        Schema::dropIfExists('series');
    }
}
