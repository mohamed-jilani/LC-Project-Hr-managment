<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('manager', function (Blueprint $table) {
                        
            //$table->unsignedBigInteger('group_id');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group');
            //$table->foreignId('group_id')->constrained('group');
        });
    }

    public function down()
    {
        Schema::table('manager', function (Blueprint $table) {
            
        });
    }
};
