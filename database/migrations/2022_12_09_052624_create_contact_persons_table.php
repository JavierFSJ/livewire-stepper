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
        Schema::create('contact_persons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_general_id')->onDelete('cascade');
            $table->string('name' , 255);
            $table->string('surname' , 80);
            $table->string('other' , 255);
            $table->enum('choices' , ['adverd' , 'post' , 'course' , 'movie' , 'other']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_persons');
    }
    
};
