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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('com_id');    
            $table->unsignedBigInteger('bri_id');      
            $table->foreign('bri_id')
                ->references('bri_id')->on('bridges')
                ->onDelete('cascade');  
            $table->string('name');
            $table->string('email');           
            $table->text('content');
            $table->string('approval')->default(0);            
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
        Schema::dropIfExists('comments');
    }
};
