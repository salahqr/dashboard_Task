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
        Schema::create('Courses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('lecturer_id')
                ->unique()
                ->constrained('lecturers')
                ->cascadeOnDelete();
            $table->integer('course_code');
            $table->string('title');
            $table->integer('credit_hours');
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
