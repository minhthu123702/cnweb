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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->string('director'); 
            $table->date('release_date'); 
            $table->integer('duration'); 
            $table->unsignedBigInteger('cinema_id'); 

            $table->foreign('cinema_id')->references('id')->on('cinemas')
                ->onDelete('cascade') 
                ->onUpdate('cascade'); 

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
        Schema::dropIfExists('movies');
    }
};
