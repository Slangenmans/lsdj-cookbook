<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaveInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\WaveInstrumentFactory> */
    use HasFactory;

    protected $table = 'wave-instruments-v9';
}
