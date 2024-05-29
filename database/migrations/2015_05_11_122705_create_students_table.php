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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Surname');
            $table->string('Patronymic');
            $table->date('DateOfBirth');
            $table->foreignId('edicationg_organization_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('speciality_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('course_of_study_id')
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
        Schema::dropIfExists('students');
    }
};
