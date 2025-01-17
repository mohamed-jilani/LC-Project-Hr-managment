<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            

            //$table->unsignedBigInteger('job_id');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');
            
            
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
};
