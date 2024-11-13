<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kline extends Model
{
    protected $fillable = [
        'symbol_id',
        'interval_id',
        'open_time',
        'close_time',
        'open',
        'high',
        'low',
        'close',
        'volume',
        'force_close',
    ];

    public function symbol()
    {
        return $this->belongsTo(Symbol::class);
    }
}
