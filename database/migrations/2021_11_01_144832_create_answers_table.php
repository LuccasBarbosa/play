<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            
          $table->increments('id');
          

          $table->integer('id_question')->unsigned();
          $table->foreign('id_question')->references('id')->on('questions')->onDelete('cascade');
          
          $table->text('description');
          $table->boolean('correct');
          
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

        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign('answers_id_question_foreign');
        });

        Schema::dropIfExists('answers');
    }
}
