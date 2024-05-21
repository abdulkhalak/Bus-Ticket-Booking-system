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
        Schema::create('routes', function (Blueprint $table) {
            
            $table->id();
            $table->string('from');//mandatory
            $table->string('to');
            $table->string('supervisor_name');
            $table->integer('supervisor_phone');
            $table->date('date');
            $table->time('time');
            $table->integer('fare');
            $table->string('type');
            $table->integer('bus_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
