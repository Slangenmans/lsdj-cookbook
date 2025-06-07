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
        Schema::create('wave-instruments-v9', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('volume_level');
            $table->string('volume_panning');
            $table->string('pitch_speed');
            $table->string('pitch_waveform');
            $table->boolean('transpose');
            $table->string('finetune');
            $table->string('cmd_rate');
            $table->string('play');
            $table->string('synth');
            $table->string('speed');
            $table->string('length');
            $table->string('loop_pos');
            $table->string('table_mode')->nullable();
            $table->string('signal');
            $table->string('filter');
            $table->string('dist');
            $table->string('phase');
            $table->string('synth_volume_first');
            $table->string('synth_volume_last');
            $table->string('cutoff_first');
            $table->string('cutoff_last');
            $table->string('q_first');
            $table->string('q_last');
            $table->string('vshift_first');
            $table->string('vshift_last');
            $table->string('limit_first');
            $table->string('limit_last');
            $table->string('phase_first');
            $table->string('phase_last');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wave-instruments-v9');
    }
};
