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
        $maxChange = min($symbol->max_change, 2); // Giới hạn biến động tối đa 2%
        $minChange = max($symbol->min_change, 0.1); // Đảm bảo có ít nhất 0.1% biến động
        $changePercent = rand(0, 1) ? rand($minChange * 10, $maxChange * 10) / 1000 : -rand($minChange * 10, $maxChange * 10) / 1000;
        $closePrice = $openPrice * (1 + $changePercent);
        if($closePrice < $symbol->min_price){
            $closePrice = $symbol->min_price;
        }
        if($closePrice > $symbol->max_price){
            $closePrice = $symbol->max_price;
        }
        if($openPrice > $closePrice){
            // Khi giá giảm, high sẽ gần với open và low sẽ gần với close
            $highPrice = $openPrice + ($openPrice * rand(5, 20) / 1000); // Thêm 0.1-0.5%
            $lowPrice = $closePrice - ($closePrice * rand(5, 20) / 1000); // Giảm 0.1-0.5%
        }else{
            // Khi giá tăng, high sẽ gần với close và low sẽ gần với open
            $highPrice = $closePrice + ($closePrice * rand(5, 20) / 1000); // Thêm 0.1-0.5%
            $lowPrice = $openPrice - ($openPrice * rand(5, 20) / 1000); // Giảm 0.1-0.5%
        }
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
                'volume' => rand(10, 100),
                'symbol_id' => $symbol->id,
                'interval_id' => $interval->id,
            ];
            $openPrice = $closePrice;
            $closePrice = rand(0, 1) ? $openPrice * (1 + rand($symbol->min_change, $symbol->max_change) / 100) : $openPrice * (1 - rand($symbol->min_change, $symbol->max_change) / 100);
            // $highPrice = max($openPrice, $closePrice) + rand(1, 4);
            // $lowPrice = min($openPrice, $closePrice) - rand(1, 4);
            if($openPrice > $closePrice){
                $highPrice = $openPrice + ($openPrice * rand(5, 20) / 1000); // Thêm 0.1-0.5%
                $lowPrice = $closePrice - ($closePrice * rand(5, 20) / 1000); // Giảm 0.1-0.5%
            }else{
                $highPrice = $closePrice + ($closePrice * rand(5, 20) / 1000); // Thêm 0.1-0.5%
                $lowPrice = $openPrice - ($openPrice * rand(5, 20) / 1000); // Giảm 0.1-0.5%
            }
        }
        return $data;
    }

    public function generateKlines($symbol, $interval)
    {
        $data = [];
        if($interval->interval == '1'){
            $data = $this->generateKlines1m($symbol, $interval);
        }
        return $data;
    }
}
