<?php

namespace Database\Factories;

use App\Enums\DistortionEnum;
use App\Enums\FilterEnum;
use App\Enums\PanningEnum;
use App\Enums\PhaseEnum;
use App\Enums\PitchSpeedEnum;
use App\Enums\TableModeEnum;
use App\Enums\WaveformEnum;
use App\Enums\WavePlayEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WaveInstrument>
 */
class WaveInstrumentFactory extends InstrumentFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'volume_level' => $this->faker->numberBetween(1, 3),
            'volume_panning' => $this->faker->randomElement(PanningEnum::cases()),
            'pitch_speed' => $this->faker->randomElement(PitchSpeedEnum::cases()),
            'pitch_waveform' => $this->faker->randomElement(WaveformEnum::cases()),
            'transpose' => $this->faker->boolean(),
            'finetune' => $this->generateHexidecimalValue(),
            'cmd_rate' => $this->generateHexidecimalValue(1),
            'play' => $this->faker->randomElement(PitchSpeedEnum::cases()),
            'synth' => $this->generateHexidecimalValue(1),
            'speed' => $this->generateHexidecimalValue(),
            'length' => $this->generateHexidecimalValue(1),
            'loop_pos' => $this->generateHexidecimalValue(1),
            'table_mode' => $this->faker->randomElement(TableModeEnum::cases()),
            'signal' => $this->faker->randomElement(WaveformEnum::cases()),
            'filter' => $this->faker->randomElement(FilterEnum::cases()),
            'dist' => $this->faker->randomElement(DistortionEnum::cases()),
            'phase' => $this->faker->randomElement(PhaseEnum::cases()),
            'synth_volume_first' => $this->generateHexidecimalValue(),
            'synth_volume_last' => $this->generateHexidecimalValue(),
            'cutoff_first' => $this->generateHexidecimalValue(),
            'cutoff_last' => $this->generateHexidecimalValue(),
            'q_first' => $this->generateHexidecimalValue(),
            'q_last' => $this->generateHexidecimalValue(),
            'vshift_first' => $this->generateHexidecimalValue(),
            'vshift_last' => $this->generateHexidecimalValue(),
            'limit_first' => $this->generateHexidecimalValue(),
            'limit_last' => $this->generateHexidecimalValue(),
            'phase_first' => $this->generateHexidecimalValue(),
            'phase_last' => $this->generateHexidecimalValue(),
        ];
    }
}
