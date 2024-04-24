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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('releaseDate');
            $table->string('status');
            $table->integer('genreID');
            $table->enum('featured', ['0', '1'])->nullable();
            $table->string('developer')->nullable();
            $table->string('videoTrailer')->nullable();
            $table->string('description')->nullable();
            $table->enum('esrb', ['EC', 'E', 'E10', 'T', 'M', 'A', 'RP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
