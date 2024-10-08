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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nic_id'); 
            $table->enum('gender', ['male', 'female', 'other']); 
            $table->integer('loyalty_points')->default(0); 
            $table->enum('loyalty_tier', ['basic', 'silver', 'gold', 'platinum'])->default('basic');
            $table->enum('user_type', ['admin', 'driver', 'conductor', 'customer'])->default('customer');  
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
