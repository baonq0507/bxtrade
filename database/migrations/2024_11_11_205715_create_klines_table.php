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
        Schema::create('klines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('symbol_id')->constrained('symbols')->onDelete('cascade');
            $table->foreignId('interval_id')->constrained('intervals')->onDelete('cascade');
            $table->bigInteger('open_time');
            $table->bigInteger('close_time');
            $table->bigInteger('open');
            $table->bigInteger('high');
            $table->bigInteger('low');
            $table->bigInteger('close');
            $table->bigInteger('volume');
            $table->bigInteger('force_close')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klines');
    }
};
