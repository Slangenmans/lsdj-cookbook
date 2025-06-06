<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulseInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\PulseInstrumentFactory> */
    use HasFactory;

    protected $table = 'pulse-instruments-v9';
}
