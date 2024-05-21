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
        Schema::create('bookseats', function (Blueprint $table) {
            $table->id();
            $table->string('pickupPoint');//mandatory
            $table->integer('route_id');
            $table->string('droppingPoint');
            $table->string('passengerName');
            $table->integer('passengerID');
            $table->string('passengerEmail');
            $table->integer('passengerPhoneNumber');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookseats');
    }
};
