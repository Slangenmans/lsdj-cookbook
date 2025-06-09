<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WaveInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\WaveInstrumentFactory> */
    use HasFactory;

    protected $table = 'wave-instruments-v9';

    public function lsdjTableV9(): BelongsTo
    {
        return $this->belongsTo(Table::class, 'table_id', 'id','pulseInstrument');
    }
}
