<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('manager', function (Blueprint $table) {
            

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
                        
            //$table->unsignedBigInteger('group_id');
            //$table->foreign('group_id')->references('id')->on('group');
            
        });
    }

    public function down()
    {
        Schema::table('manager', function (Blueprint $table) {
            
        });
    }
};
