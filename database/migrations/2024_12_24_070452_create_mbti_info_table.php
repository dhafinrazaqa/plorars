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
        Schema::create('mbti_info', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('mbti_type', 4)->unique(); // e.g., "INTJ", "ENTP", etc.
            $table->string('mbti_image')->nullable(); // Path or URL to an image
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_info');
    }
};
