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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->string('semester'); // e.g., 'Semester 1'
            $table->string('mata_pelajaran'); // Subject name
            $table->integer('nilai_tugas')->nullable();
            $table->integer('nilai_uts')->nullable();
            $table->integer('nilai_uas')->nullable();
            $table->integer('nilai_akhir')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
