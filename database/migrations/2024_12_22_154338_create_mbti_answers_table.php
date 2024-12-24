<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mbti_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();  // Optional user ID if needed
            $table->string('type');  // The MBTI type (e.g., 'E', 'I', etc.)
            $table->integer('point');  // The point for the selected option
            $table->timestamps();  // Created and updated timestamps
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbti_answers');
    }
};
