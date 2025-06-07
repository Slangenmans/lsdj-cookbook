<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstrumentFactory extends Factory
{
    public function definition(): array
    {
        return [];
    }

    public function generateHexidecimalValue(?int $characterCount = 2): string
    {
        return $this->faker->regexify(sprintf('[0-9A-F]{%d}', $characterCount));;
    }
}
