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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus_number')->unique();
            $table->integer('capacity');
            $table->foreignId('driver_id')->constrained('user_information')->onDelete('cascade'); 
            $table->foreignId('conductor_id')->constrained('user_information')->onDelete('cascade'); 
            $table->enum('bus_type', ['normal', 'standard', 'luxury']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
