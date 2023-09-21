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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->boolean('important');
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
