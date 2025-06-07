<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            array_push($definition, ...[
                "{$step}_VOL" => $this->generateHexidecimalValue(),
                "{$step}_TSP" => $this->generateHexidecimalValue(),
                "{$step}_CMD_effect_1" => $this->generateHexidecimalValue(),
                "{$step}_CMD_value_1" => $this->generateHexidecimalValue(),
                "{$step}_CMD_effect_2" => $this->generateHexidecimalValue(),
                "{$step}_CMD_value_2" => $this->generateHexidecimalValue()
            ]);
        };

        return $definition;
    }
}
