<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->cascadeOnDelete();
            $table->foreignId('teacher_id')->constrained('teachers')->cascadeOnDelete();
            
            // Add this new column to track the class at the time of grading
            $table->string('class_name'); 
            
            $table->string('semester'); // "Semester 1" or "Semester 2"
            $table->integer('nilai_tugas')->nullable();
            $table->integer('nilai_uts')->nullable();
            $table->integer('nilai_uas')->nullable();
            $table->integer('nilai_akhir')->nullable();
            $table->timestamps();

            // Update the unique constraint so a student can have a "Semester 1" in Class X, and a "Semester 1" in Class XI
            $table->unique(['student_id', 'teacher_id', 'class_name', 'semester']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};