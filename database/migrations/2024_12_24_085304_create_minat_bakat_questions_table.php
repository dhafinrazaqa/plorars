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
        Schema::create('minat_bakat_questions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('question'); // The question text
            $table->json('options'); // Store question options as JSON
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minat_bakat_questions');
    }
};
