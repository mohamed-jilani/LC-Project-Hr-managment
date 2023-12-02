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
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group');
            
            
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
};
