<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('education', function (Blueprint $table) {
            

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    public function down()
    {
        Schema::table('education', function (Blueprint $table) {
            
        });
    }
};
