<?php

namespace Database\Factories;

use App\Enums\NoiseSafetyEnum;
use App\Enums\PanningEnum;
use App\Enums\TableModeEnum;
use App\Enums\WaveformEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoiseInstrument>
 */
class NoiseInstrumentFactory extends InstrumentFactory
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
            'output' => $this->faker->randomElement(PanningEnum::cases()),
            'length' => $this->faker->optional(0.1, $this->generateHexidecimalValue())->randomElement(['UNLIM']),
            'pitch_safety' => $this->faker->randomElement(NoiseSafetyEnum::cases()),
            'vibrato' => $this->faker->randomElement(WaveformEnum::cases()),
            'transpose' => $this->faker->boolean(10),
            'cmd_rate' => $this->generateHexidecimalValue(1),
            'table_mode' => $this->faker->randomElement(TableModeEnum::cases()),
        ];
    }
}
