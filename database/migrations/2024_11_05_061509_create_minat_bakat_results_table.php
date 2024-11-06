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
        Schema::create('minat_bakat_results', function (Blueprint $table) {
            $table->id('minat_bakat_results_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('result1');
            $table->string('result2');
            $table->string('result3');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('minat_bakat_results');
    }
};