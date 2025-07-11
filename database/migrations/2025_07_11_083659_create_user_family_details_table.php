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
        Schema::create('user_family_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_family_id')->constrained('user_families')->onDelete('cascade');
            $table->string('child_name')->nullable();
            $table->string('child_gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_family_details');
    }
};
