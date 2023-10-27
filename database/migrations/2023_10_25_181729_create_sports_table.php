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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('match_type')->nullable();
            $table->string('tournament_type')->nullable();
            $table->string('first_team')->nullable();
            $table->string('second_team')->nullable();
            $table->string('category')->nullable();
            $table->string('venue')->nullable();
            $table->string('stadium_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};