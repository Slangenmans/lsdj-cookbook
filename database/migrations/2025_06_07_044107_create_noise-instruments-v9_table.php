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
        Schema::create('noise-instruments-v9', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('env1');
            $table->string('env2');
            $table->string('env3')->nullable();
            $table->string('output');
            $table->string('length');
            $table->string('pitch_safety');
            $table->string('vibrato');
            $table->boolean('transpose');
            $table->string('cmd_rate');
            // TODO: Add foreign ID table column
            $table->string('table_mode')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noise-instruments-v9');
    }
};
