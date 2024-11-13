<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BinanceService
{
    public function getKline($symbol, $interval)
    {
        $response = Http::get("https://api.binance.com/api/v3/klines?symbol=$symbol&interval=$interval&limit=1000");
        if ($response->getStatusCode() == 200) {
            return $response->json();
        }
        return [];
    }
}
