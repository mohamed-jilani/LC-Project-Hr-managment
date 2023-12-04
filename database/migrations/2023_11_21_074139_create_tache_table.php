<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->integer('manager_validation')->default(0);
            $table->date('dateCreation')->nullable();
            $table->dateTime('dateRealisationFinal')->nullable();
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
        Schema::dropIfExists('tache');
    }
}
