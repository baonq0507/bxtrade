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
        $maxChange = min($symbol->max_change, 2); // Giới hạn biến động tối đa 2%
        $minChange = max($symbol->min_change, 0.1); // Đảm bảo có ít nhất 0.1% biến động
        
        // Xác định xu hướng hiện tại (tăng/giảm)
        $currentTrend = $kline->close > $kline->open ? 'up' : 'down';
        
        // Random xu hướng mới với tỉ lệ nghiêng về xu hướng ngược lại
        $randomNum = rand(1, 100);
        if ($currentTrend == 'up') {
            // Nếu đang tăng, 70% khả năng sẽ giảm
            $newTrend = $randomNum <= 70 ? 'down' : 'up';
        } else {
            // Nếu đang giảm, 70% khả năng sẽ tăng
            $newTrend = $randomNum <= 70 ? 'up' : 'down';
        }
        
        // Tính toán biến động giá dựa trên xu hướng
        if ($currentTrend == 'up' && $newTrend == 'down') {
            // Đang tăng chuyển sang giảm - giảm từ từ
            $changePercent = -rand($minChange * 5, $maxChange * 5) / 1000;
        } elseif ($currentTrend == 'down' && $newTrend == 'up') {
            // Đang giảm chuyển sang tăng - tăng từ từ  
            $changePercent = rand($minChange * 5, $maxChange * 5) / 1000;
        } else {
            // Tiếp tục xu hướng hiện tại
            $changePercent = $currentTrend == 'up' ? 
                rand($minChange * 10, $maxChange * 10) / 1000 : 
                -rand($minChange * 10, $maxChange * 10) / 1000;
        }

        if ($kline->force_close) {
            if ($kline->force_close > $kline->open) {
                // Tăng dần đến force_close
                $closePrice = min($oldClose * (1 + abs($changePercent)), $kline->force_close);
            } else {
                // Giảm dần đến force_close
                $closePrice = max($oldClose * (1 - abs($changePercent)), $kline->force_close);
            }
        } else {
            $closePrice = $oldClose * (1 + $changePercent);
        }

        $nextKline = Kline::where('interval_id', 1)
            ->where('open_time', '>', $kline->open_time)
            ->where('symbol_id', $symbol->id)
            ->orderBy('open_time', 'asc')
            ->first();

        // Update high và low cho kline hiện tại
        $klineHigh = max($kline->high, $closePrice);
        $klineLow = min($kline->low, $closePrice);

        $kline->update([
            'close' => $closePrice,
            'high' => $klineHigh,
            'low' => $klineLow,
            'volume' => $kline->volume + rand(0, 10),
        ]);

        // Update high và low cho kline tiếp theo
        $nextKlineHigh = max($nextKline->high, $closePrice);
        $nextKlineLow = min($nextKline->low, $closePrice);

        $nextKline->update([
            'open' => $closePrice,
            'high' => $nextKlineHigh,
            'low' => $nextKlineLow,
            'volume' => $nextKline->volume + rand(0,10)
        ]);
    }
}
