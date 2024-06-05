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
        Schema::create('monitoring_tanahs', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->integer('kelembaban');
            $table->integer('temperatur');
            $table->float('nitrogen');
            $table->float('fosfor');
            $table->float('kalium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_tanahs');
    }
};
