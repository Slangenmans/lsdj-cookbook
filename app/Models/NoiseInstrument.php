<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NoiseInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\NoiseInstrumentFactory> */
    use HasFactory;

    protected $table = 'noise-instruments-v9';

    public function lsdjTableV9(): BelongsTo
    {
        return $this->belongsTo(Table::class, 'table_id', 'id','pulseInstrument');
    }
}
