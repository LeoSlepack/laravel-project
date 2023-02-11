<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up() {

        Schema::create('quizzes', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('description');
            $table->string('question');
            $table->integer('num_correct_answers')->default(1);
            $table->string('correct_answer');
            $table->string('correct_answer_2')->nullable();
            $table->string('incorrect_answer');
            $table->timestamps();;

        });

    }

   
    public function down() {

        Schema::dropIfExists('quizzes');

    }
};
