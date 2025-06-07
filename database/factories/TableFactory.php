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
            array_push(...[
                "{$step}_VOL" => $this->generateHexidecimalValue(),
                "{$step}_TSP",
                "{$step}_CMD_effect_1",
                "{$step}_CMD_value_1",
                "{$step}_CMD_effect_2",
                "{$step}_CMD_value_2"
            ]);
        };
    }
}
