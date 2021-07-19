<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia', function (Blueprint $table) {
            
          $table->increments('id');
          $table->string('texto');

          $table->integer('id_eixo')->unsigned();
          $table->foreign('id_eixo')->references('id')->on('eixo')->onDelete('cascade');
                
          $table->string('personagem');
          $table->string('url_jogo');
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
        Schema::dropIfExists('historia');
    }
}
