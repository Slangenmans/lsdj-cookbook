<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\PitchSpeedEnum;
use App\Enums\WaveformEnum;
use App\Enums\PanningEnum;
use App\Enums\TableModeEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PulseInstrument>
 */
class PulseInstrumentFactory extends InstrumentFactory
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
            'env1' => $this->generateHexidecimalValue(),
            'env2' => $this->generateHexidecimalValue(),
            'env3' => $this->faker->boolean() ? null : $this->generateHexidecimalValue(),
            'wave' => $this->faker->randomElement([25, 50, 75]),
            'output' => $this->faker->randomElement(PanningEnum::cases()),
            'length' => $this->faker->optional(0.1, $this->generateHexidecimalValue())->randomElement(['UNLIM']),
            'sweep' => $this->generateHexidecimalValue(),
            'pitch_speed' => $this->faker->randomElement(PitchSpeedEnum::cases()),
            'pitch_waveform' => $this->faker->randomElement(WaveformEnum::cases()),
            'transpose' => $this->faker->boolean(10),
            'transpose_pu2' => $this->generateHexidecimalValue(),
            'finetune' => $this->generateHexidecimalValue(),
            'cmd_rate' => $this->generateHexidecimalValue(1),
            'table_mode' => $this->faker->randomElement(TableModeEnum::cases()),
        ];
    }
}
