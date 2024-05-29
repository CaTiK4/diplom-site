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
        Schema::create('disabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('illness_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('type_of_health_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('disability_group_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disabilities');
    }
};
