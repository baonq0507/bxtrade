<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    protected $fillable = [
        'symbol',
        'name',
        'exchange',
        'type',
        'full_name',
        'description',
        'timezone',
        'session',
        'ticker',
        'minmov',
        'pricescale',
        'supported_resolutions',
        'has_no_volume',
        'min_price',
        'max_price',
        'min_change',
        'max_change',
    ];
}
