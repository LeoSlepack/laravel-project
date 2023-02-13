<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {

        Schema::create('correctanswers', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('answer');
            $table->string('answer_two');
            
        });

    }

   
    public function down() {

        Schema::dropIfExists('correctanswers');

    }
};
