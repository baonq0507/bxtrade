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
        // Initialize data array
        $data = [];

        // Set up initial timestamps for the day
        $openTime = Carbon::now()->subDays(1)->startOfDay()->timestamp;
        $closeTime = Carbon::now()->endOfDay()->timestamp;

        // Initialize prices
        $openPrice = $symbol->min_price;
        $maxChange = min($symbol->max_change, 5); // Max change up to 5% to simulate higher volatility
        $minChange = max($symbol->min_change, 0.2); // Ensure at least 0.2% change

        $time = 60; // 1-minute intervals

        for ($i = $openTime; $i <= $closeTime; $i += $time) {
            // Randomly determine price movement percentage
            $changePercent = (rand(0, 1) ? 1 : -1) * rand($minChange * 10, $maxChange * 10) / 1000;

            // Calculate new close price based on volatility
            $closePrice = $openPrice * (1 + $changePercent);
            $closePrice = max($symbol->min_price, min($closePrice, $symbol->max_price));

            // Determine high and low based on the direction of price movement
            if ($openPrice > $closePrice) {
                $highPrice = $openPrice + ($openPrice * rand(5, rand(5,10)) / 1000); // Increase up to 1%
                $lowPrice = $closePrice - ($closePrice * rand(5, rand(5,10)) / 1000); // Decrease up to 1%
            } else {
                $highPrice = $closePrice + ($closePrice * rand(5, rand(5,10)) / 1000);
                $lowPrice = $openPrice - ($openPrice * rand(5, rand(5,10)) / 1000);
            }

            // Generate volume data to reflect more realistic variations
            $volume = rand(100, 1000); // Randomize volume to reflect high Bitcoin activity

            // Append this candlestick data
            $data[] = [
                'open_time' => $i,
                'close_time' => $i + $time,
                'open' => $openPrice,
                'close' => $closePrice,
                'high' => $highPrice,
                'low' => $lowPrice,
                'volume' => $volume,
                'symbol_id' => $symbol->id,
                'interval_id' => $interval->id,
                'force_close' => $closePrice,
            ];

            // Prepare for the next interval
            $openPrice = $closePrice;
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
