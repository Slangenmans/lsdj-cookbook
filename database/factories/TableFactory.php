<?php

namespace Database\Factories;

use App\Enums\EffectEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends InstrumentFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tableConfig = config('tables')['v9'];
        $definition = [];

        foreach (range(0, $tableConfig['steps']) as $step) {
            $stepValues = [
                "{$step}_VOL" => $this->generateHexidecimalValue(),
                "{$step}_TSP" => $this->generateHexidecimalValue(),
                "{$step}_CMD_effect_1" => $this->faker->randomElement(EffectEnum::cases()),
                "{$step}_CMD_value_1" => $this->generateHexidecimalValue(),
                "{$step}_CMD_effect_2" => $this->faker->randomElement(EffectEnum::cases()),
                "{$step}_CMD_value_2" => $this->generateHexidecimalValue()
            ];

            foreach ($stepValues as $key => $value) {
                $definition[$key] = $value;
            }
        };

        return $definition;
    }
}
