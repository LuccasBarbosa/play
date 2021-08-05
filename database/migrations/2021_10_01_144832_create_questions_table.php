<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            
          $table->increments('id');
          $table->integer('id_episodio')->unsigned();
          $table->foreign('id_episodio')->references('id')->on('episodios')->onDelete('cascade');
          $table->text('description');          
          $table->string('img_url')->nullable();         
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
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign('questions_id_episodio_foreign');
        });

        Schema::dropIfExists('questions');
    }
}
