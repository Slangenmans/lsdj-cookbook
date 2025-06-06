<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PulseInstrument>
 */
class PulseInstrumentFactory extends Factory
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
            'output' => $this->faker->randomElement(['L', 'R', 'LR']),
            'length' => $this->faker->optional(0.1, $this->generateHexidecimalValue())->randomElement(['UNLIM']),
            'sweep' => $this->generateHexidecimalValue(),
            'pitch_speed' => $this->faker->randomElement(['FAST', 'TICK', 'STEP', 'DRUM']),
            'pitch_waveform' => $this->faker->randomElement(['triangle', 'saw', 'square']), // TODO: Make Enums
            'transpose' => $this->faker->boolean(10),
            'transpose_pu2' => $this->generateHexidecimalValue(),
            'finetune' => $this->generateHexidecimalValue(),
            'cmd_rate' => $this->generateHexidecimalValue(1),
            'table_mode' => $this->faker->randomElement([null, 'STEP', 'TICK']),
        ];
    }

    public function generateHexidecimalValue(?int $characterCount = 2): string
    {
        return $this->faker->regexify(sprintf('[0-9A-F]{%d}', $characterCount));;
    }
}
