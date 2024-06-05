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
        Schema::create('monitoring_hidroponiks', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->integer('suhu');
            $table->integer('tds');
            $table->enum('pompa', [
                'on',
                'off',
            ])->default('off');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_hidroponiks');
    }
};
