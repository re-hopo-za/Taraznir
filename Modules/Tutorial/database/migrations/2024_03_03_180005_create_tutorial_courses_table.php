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
        Schema::create('tutorial_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutorial_id');
            $table->string('index');
            $table->string('title');
            $table->string('link')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorial_courses');
    }
};
