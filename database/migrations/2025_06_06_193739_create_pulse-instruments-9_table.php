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
        Schema::create('pulse-instruments-v9', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('env1');
            $table->string('env2');
            $table->string('env3')->nullable();
            $table->integer('wave');
            $table->string('output');
            $table->string('length');
            $table->string('sweep');
            $table->string('pitch_speed');
            $table->string('pitch_waveform');
            $table->boolean('transpose');
            $table->string('transpose_pu2');
            $table->string('finetune');
            $table->string('cmd_rate');
            $table->string('table_mode')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulse-instruments-v9');
    }
};
