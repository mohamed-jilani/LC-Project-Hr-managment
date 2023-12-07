<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   


        Schema::create('history_conges', function (Blueprint $table)  {
            $table->id();
            $table->string('subject')->nullable();
            $table->date('created_at')->nullable();
            $table->date('finished_at')->nullable();
            $table->BigInteger('user_id');
            $table->Integer('etat')->nullable();
            //$table->timestamps();
        });
    }

       
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_conges');
    }
};
