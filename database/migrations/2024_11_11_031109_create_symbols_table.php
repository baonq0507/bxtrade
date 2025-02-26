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
        Schema::create('symbols', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->string('name');
            $table->string('exchange')->nullable()->default('BICU');
            $table->string('type')->nullable()->default('crypto');
            $table->string('full_name')->nullable()->default('BICUSTD');
            $table->string('description')->nullable();
            $table->string('timezone')->nullable()->default('Asia/Ho_Chi_Minh');
            $table->string('session')->nullable()->default('24x7');
            $table->string('ticker')->nullable();
            $table->integer('minmov')->nullable()->default(1);
            $table->integer('pricescale')->nullable()->default(100);
            $table->boolean('has_intraday')->nullable()->default(true);
            $table->boolean('has_daily')->nullable()->default(true);
            $table->boolean('has_weekly_and_monthly')->nullable()->default(true);
            $table->json('supported_resolutions')->nullable();
            $table->boolean('has_no_volume')->nullable()->default(false);
            $table->integer('status')->comment('0: inactive, 1: active')->default(1);
            $table->bigInteger('min_price')->nullable()->default(0);
            $table->bigInteger('max_price')->nullable()->default(0);
            $table->integer('min_change')->nullable()->default(1);
            $table->integer('max_change')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symbols');
    }
};
