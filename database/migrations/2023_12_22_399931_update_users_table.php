<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            //$table->unsignedBigInteger('departement_id');
            $table->integer('departement_id')->unsigned();
            $table->foreign('departement_id')->references('id')->on('departement');
            
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }

};
