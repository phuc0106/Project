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
        Schema::table('bridges', function (Blueprint $table) {
            $table->unsignedBigInteger('typ_id');
            $table->foreign('typ_id')
                ->references('typ_id')->on('typebridge')
                ->onDelete('cascade');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bridges', function (Blueprint $table) {
            //
        });
    }
};
