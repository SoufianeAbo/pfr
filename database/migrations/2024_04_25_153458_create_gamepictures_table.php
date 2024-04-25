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
        Schema::create('gamepictures', function (Blueprint $table) {
            $table->id();
            $table->integer('gameID');
            $table->string('smallLogo');
            $table->string('bigLogo');
            $table->string('awards')->nullable();
            $table->string('awards2')->nullable();
            $table->string('divider');
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->string('divider2')->nullable();
            $table->string('pageVid');
            $table->string('headerVid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gamepictures');
    }
};
