<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tache', function (Blueprint $table) {
            
            $table->integer('etat_id')->unsigned();
            $table->foreign('etat_id')->references('id')->on('etat');

        });
    }

    public function down()
    {
        Schema::table('tache', function (Blueprint $table) {
            
        });
    }
};
