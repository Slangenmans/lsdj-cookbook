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
        $count = 100;

        // Instruments with tables
        foreach (range(1, $count) as $int) {
            PulseInstrumentFactory::new()
                ->for(TableFactory::new(), 'lsdjTableV9')
                ->createOne();
            WaveInstrumentFactory::new()
                ->for(TableFactory::new(), 'lsdjTableV9')
                ->createOne();
            NoiseInstrumentFactory::new()
                ->for(TableFactory::new(), 'lsdjTableV9')
                ->createOne();
        }


        // Instruments without tables
        PulseInstrumentFactory::new()->times(10)->createMany();
        WaveInstrumentFactory::new()->times(10)->createMany();
        NoiseInstrumentFactory::new()->times(10)->createMany();
    }
}
