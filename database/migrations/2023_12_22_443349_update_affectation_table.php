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
        Schema::table('affectation', function (Blueprint $table) {
            //
            $table->integer('projet_id')->unsigned();
            $table->foreign('projet_id')->references('id')->on('projet');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affectation', function (Blueprint $table) {
            //
        });
    }
};
