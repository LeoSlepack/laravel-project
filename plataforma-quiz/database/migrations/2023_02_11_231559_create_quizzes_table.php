<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->text("description");
            $table->string("question");
            $table->string("answer")->nullable();

        });
    }

   
    public function down() {

        Schema::dropIfExists('quizzes');
        
    }
};
