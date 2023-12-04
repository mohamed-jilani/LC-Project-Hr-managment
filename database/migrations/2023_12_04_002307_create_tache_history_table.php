<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tache_history', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->date('dateCreation')->nullable();
            $table->dateTime('dateRealisationFinal')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('etat_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tache_history');
    }
};
