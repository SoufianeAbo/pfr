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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('resume');
            $table->string('picture');
            $table->string('coverLetter')->nullable();
            $table->string('country');
            $table->string('linkedinProfile')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('source');
            $table->integer('salaryExpectation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
