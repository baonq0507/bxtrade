<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kline;
use Carbon\Carbon;
class UpdateKline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatekline';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //get klines 1m
        $now = time();
        $kline = Kline::where('interval_id', 1)
            ->where('open_time', '<=', $now)
            ->orderBy('open_time', 'desc')
            ->with('symbol')
            ->first();
        if(!$kline){
            return;
        }

        $symbol = $kline->symbol;
        $oldClose = $kline->close;
        $maxChange = min($symbol->max_change, 2);
        $minChange = max($symbol->min_change, 0.1);
        
        // Kiểm tra nếu còn 2 giây đến thời điểm kết thúc
        $timeLeft = $kline->close_time - $now;
        if ($timeLeft <= 2 && $kline->force_close) {
            // Gán giá đóng cửa bằng force_close
            $closePrice = $kline->force_close;
            
            // Tính high và low với khoảng cách 20-50% so với open và close
            $priceRange = abs($closePrice - $kline->open);
            $randomPercent = rand(20, 50) / 100;
            
            $klineHigh = max($closePrice, $kline->open) + ($priceRange * $randomPercent);
            $klineLow = min($closePrice, $kline->open) - ($priceRange * $randomPercent);
            
            $kline->update([
                'close' => $closePrice,
                'high' => $klineHigh,
                'low' => $klineLow,
                'volume' => $kline->volume + rand(0, 10),
            ]);

            // Cập nhật kline tiếp theo
            $nextKline = Kline::where('interval_id', 1)
                ->where('open_time', '>', $kline->open_time)
                ->where('symbol_id', $symbol->id)
                ->orderBy('open_time', 'asc')
                ->first();

            if ($nextKline) {
                $nextKline->update([
                    'open' => $closePrice,
                    'high' => $klineHigh,
                    'low' => $klineLow,
                    'volume' => $nextKline->volume + rand(0,10)
                ]);
            }

            $this->info('Update kline success '.$kline->id .' '.$kline->open_time.' '.$kline->close_time);
            
            return;
        }

        // Xử lý bình thường nếu chưa đến thời điểm kết thúc
        $currentTrend = $kline->close > $kline->open ? 'up' : 'down';
        
        $randomNum = rand(1, 100);
        if ($currentTrend == 'up') {
            $newTrend = $randomNum <= 70 ? 'down' : 'up';
        } else {
            $newTrend = $randomNum <= 70 ? 'up' : 'down';
        }
        
        if ($currentTrend == 'up' && $newTrend == 'down') {
            $changePercent = -rand($minChange * 5, $maxChange * 5) / 1000;
        } elseif ($currentTrend == 'down' && $newTrend == 'up') {
            $changePercent = rand($minChange * 5, $maxChange * 5) / 1000;
        } else {
            $changePercent = $currentTrend == 'up' ? 
                rand($minChange * 10, $maxChange * 10) / 1000 : 
                -rand($minChange * 10, $maxChange * 10) / 1000;
        }

        $closePrice = $oldClose * (1 + $changePercent);

        $nextKline = Kline::where('interval_id', 1)
            ->where('open_time', '>', $kline->open_time)
            ->where('symbol_id', $symbol->id)
            ->orderBy('open_time', 'asc')
            ->first();

        $maxPriceChange = abs($closePrice - $kline->open) * 0.5;
        
        $klineHigh = max($closePrice, $kline->open) + (rand(1, 10) / 100) * $maxPriceChange;
        $klineLow = min($closePrice, $kline->open) - (rand(1, 10) / 100) * $maxPriceChange;

        $kline->update([
            'close' => $closePrice,
            'high' => $klineHigh,
            'low' => $klineLow,
            'volume' => $kline->volume + rand(0, 10),
        ]);

        $maxPriceChangeNext = abs($closePrice - $nextKline->close) * 0.5;
        
        $nextKlineHigh = max($closePrice, $nextKline->close) + (rand(1, 10) / 100) * $maxPriceChangeNext;
        $nextKlineLow = min($closePrice, $nextKline->close) - (rand(1, 10) / 100) * $maxPriceChangeNext;

        $nextKline->update([
            'open' => $closePrice,
            'high' => $nextKlineHigh,
            'low' => $nextKlineLow,
            'volume' => $nextKline->volume + rand(0,10)
        ]);

        $this->info('Update kline success '.$kline->id .' '.$kline->open_time.' '.$kline->close_time);
    }
}
