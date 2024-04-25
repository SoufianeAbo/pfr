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
        Schema::create('gametext', function (Blueprint $table) {
            $table->id();
            $table->integer('gameID');
            $table->string('headerBig');
            $table->string('headerDesc');
            $table->string('postfBig');
            $table->string('postfDesc');
            $table->string('secondfDesc')->nullable();
            $table->string('minimumReq');
            $table->string('recomReq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gametext');
    }
};
