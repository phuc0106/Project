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
        Schema::create('bridges', function (Blueprint $table) {
            $table->id('bri_id');            
            $table->string('name');  
            $table->string('bri_slug');  
            $table->unsignedBigInteger('cou_id');
            $table->foreign('cou_id')
                ->references('cou_id')->on('countries')
                ->onDelete('cascade');          
            $table->float('height')->Nullable;       
            $table->float('width')->Nullable; 
            $table->float('length')->Nullable; 
            $table->longtext('description')->Nullable;
            $table->string('location_map')->Nullable;
            $table->date('open_date')->Nullable;
            $table->boolean('longest_span')->Default(0);
            $table->boolean('historical_great')->Default(0);
            $table->boolean('high_level')->Default(0);
            $table->boolean('iconic')->Default(0);
            $table->boolean('modern')->Default(0);              
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
        Schema::dropIfExists('bridges');
    }
};
