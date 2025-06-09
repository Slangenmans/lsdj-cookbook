<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\NoiseInstrumentFactory;
use Database\Factories\PulseInstrumentFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\TableFactory;
use Database\Factories\WaveInstrumentFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tables = TableFactory::new()->createMany(100);

        // Instruments with tables
        // TODO: Sequences approach doesn't work. Wrap factories in loop, use ->for(TableFactory etc.)
        PulseInstrumentFactory::new()
            ->times(50)
            ->sequence(fn (Sequence $sequence) => ['table_id' => $tables->shuffle()->first()->id])
            ->create();
        WaveInstrumentFactory::new()->times(50)->create()
            ->times(50)
            ->sequence(fn (Sequence $sequence) => ['table_id' => $tables->shuffle()->first()->id])
            ->create();
        NoiseInstrumentFactory::new()->times(50)->create()
            ->times(50)
            ->sequence(fn (Sequence $sequence) => ['table_id' => $tables->shuffle()->first()->id])
            ->create();

        // Instruments without tables
        PulseInstrumentFactory::new()->times(10)->createMany();
        WaveInstrumentFactory::new()->times(10)->createMany();
        NoiseInstrumentFactory::new()->times(10)->createMany();
    }
}
