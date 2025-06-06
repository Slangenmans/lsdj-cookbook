<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\PulseInstrumentFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        PulseInstrumentFactory::new()->times(100)->createMany();
    }
}
