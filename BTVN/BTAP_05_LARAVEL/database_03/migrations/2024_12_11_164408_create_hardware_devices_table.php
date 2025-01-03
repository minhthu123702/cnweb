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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); 
            $table->string('device_name');
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']); 
            $table->boolean('status'); 
            $table->unsignedBigInteger('center_id');

            $table->timestamps(); 

    
            $table->foreign('center_id')->references('id')->on('it_centers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware_devices');
    }
};