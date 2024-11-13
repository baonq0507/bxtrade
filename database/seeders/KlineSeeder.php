<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symbol;
use App\Models\Interval;
use App\Models\Kline;
use App\Services\BinanceService;
use Carbon\Carbon;
class KlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $symbols = Symbol::all();
        foreach ($symbols as $symbol) {
            $intervals = Interval::all();
            foreach ($intervals as $interval) {
                $data = $this->generateKlines($symbol, $interval);
                foreach ($data as $item) {
                    Kline::create($item);
                }
            }
        }
    }

    public function generateKlines1m($symbol, $interval)
    {
        // tạo data giả
        $data = [];
        $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        $closeTime = Carbon::now()->endOfDay()->timestamp;
        $openPrice = $symbol->min_price;
        $closePrice = rand(0, 1) ? $openPrice * (1 + rand($symbol->min_change, $symbol->max_change) / 100) : $openPrice * (1 - rand($symbol->min_change, $symbol->max_change) / 100);
        $highPrice = max($openPrice, $closePrice) + rand(1, 4);
        $lowPrice = min($openPrice, $closePrice) - rand(1, 4);
        $time = 60;
        // switch ($interval->interval) {
        //     case '5':
        //         $time = 300;
        //         $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case '15':
        //         $time = 900;
        //         $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case '30':
        //         $time = 1800;
        //         $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case '60':
        //         $time = 3600;
        //         $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case 'D':
        //         $time = 86400;
        //         $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case '2D':
        //         $time = 86400 * 2;
        //         $openTime = Carbon::now()->subDays(2)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case '3D':
        //         $time = 86400 * 3;
        //         $openTime = Carbon::now()->subDays(3)->startOfDay()->timestamp;
        //         $closeTime = Carbon::now()->endOfDay()->timestamp;
        //         break;
        //     case 'M':
        //         $time = 2592000;
        //         $openTime = Carbon::now()->subDays(1)->startOfMonth()->timestamp;
        //         $closeTime = Carbon::now()->endOfMonth()->timestamp;
        //         break;
        //     case 'W':
        //         $time = 604800;
        //         $openTime = Carbon::now()->subDays(1)->startOfWeek()->timestamp;
        //         $closeTime = Carbon::now()->endOfWeek()->timestamp;
        //         break;
        //     case '3W':
        //         $time = 604800 * 3;
        //         $openTime = Carbon::now()->subDays(3)->startOfWeek()->timestamp;
        //         $closeTime = Carbon::now()->endOfWeek()->timestamp;
        //         break;
        //     case '6M':
        //         $time = 15778463 * 6;
        //         $openTime = Carbon::now()->subDays(6)->startOfMonth()->timestamp;
        //         $closeTime = Carbon::now()->endOfMonth()->timestamp;
        //         break;
        //     default:
        //         break;
        // }
        for ($i = $openTime; $i <= $closeTime; $i += $time) {
            $data[] = [
                'open_time' => $i,
                'close_time' => $i + $time,
                'open' => $openPrice,
                'close' => $closePrice,
                'high' => $highPrice,
                'low' => $lowPrice,
                'volume' => rand(1000, 100000),
                'symbol_id' => $symbol->id,
                'interval_id' => $interval->id,
            ];
            $openPrice = $closePrice;
            $closePrice = rand(0, 1) ? $openPrice * (1 + rand($symbol->min_change, $symbol->max_change) / 100) : $openPrice * (1 - rand($symbol->min_change, $symbol->max_change) / 100);
            $highPrice = max($openPrice, $closePrice) + rand(1, 4);
            $lowPrice = min($openPrice, $closePrice) - rand(1, 4);
        }
        return $data;
    }

    public function generateKlines($symbol, $interval)
    {
        $data = $this->generateKlines1m($symbol, $interval);
        return $data;
    }
}
