<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEixoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eixo', function (Blueprint $table) {
            
          
          $table->integer('id_episodio')->unsigned();
          $table->foreign('id_episodio')->references('id')->on('episodios')->onDelete('cascade');
          $table->string('eixo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eixo');
    }
}
