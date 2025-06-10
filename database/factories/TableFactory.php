<?php

namespace Database\Factories;

use App\Enums\EffectEnum;
use Random\RandomException;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends InstrumentFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws RandomException
     */
    public function definition(): array
    {
        return [
            "VOL" => $this->generateStepValuesJson(),
            "TSP" => $this->generateStepValuesJson(),
            "CMD_effect_1" => $this->faker->randomElement(EffectEnum::cases()),
            "CMD_value_1" => $this->generateStepValuesJson(),
            "CMD_effect_2" => $this->faker->randomElement(EffectEnum::cases()),
            "CMD_value_2" => $this->generateStepValuesJson(),
        ];
    }

    private function generateStepValuesJson(): string
    {
        $array = [];
        foreach(range(0, config('tables')['v9']['steps']) as $step) {
            $array[$step] = $this->generateHexidecimalValue();
        }

        return collect($array)->toJson();
    }
}
