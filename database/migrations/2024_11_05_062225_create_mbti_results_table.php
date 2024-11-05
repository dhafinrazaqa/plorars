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
        Schema::create('mbti_results', function (Blueprint $table) {
            $table->id('mbti_results_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('mbti_type');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mbti_results');
    }
};