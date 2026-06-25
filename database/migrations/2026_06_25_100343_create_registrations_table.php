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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            // Welcher User meldet sich an?
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // Für welches Seminar?
            $table->foreignId('seminar_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            // Ein User darf sich nicht doppelt für dasselbe Seminar anmelden
            $table->unique(['user_id', 'seminar_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
