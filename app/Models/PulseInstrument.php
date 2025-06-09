<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PulseInstrument extends Model
{
    /** @use HasFactory<\Database\Factories\PulseInstrumentFactory> */
    use HasFactory;

    protected $table = 'pulse-instruments-v9';

    public function lsdjTableV9(): BelongsTo
    {
        return $this->belongsTo(Table::class, 'table_id', 'id','pulseInstrument');
    }
}
