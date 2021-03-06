<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            
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

        Schema::table('options', function (Blueprint $table) {
            $table->dropForeign('options_id_question_foreign');
        });

        Schema::dropIfExists('answers');
    }
}
