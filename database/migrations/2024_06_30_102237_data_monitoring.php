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
        Schema::create('data_monitoring', function (Blueprint $table) {
            $table->id();
            $table->float('speed')->nullable();
            $table->float('cadence')->nullable();
            $table->integer('heartbeat')->nullable();
            $table->float('tilt')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_monitoring');
    }
};
