<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoiseInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\NoiseInstrumentFactory> */
    use HasFactory;

    protected $table = 'noise-instruments-v9';
}
