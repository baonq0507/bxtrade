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
        $symbol = $kline->symbol;
        $oldClose = $kline->close;
        $maxChange = min($symbol->max_change, 2); // Giới hạn biến động tối đa 2%
        $minChange = max($symbol->min_change, 0.1); // Đảm bảo có ít nhất 0.1% biến động
        $changePercent = rand(0, 1) ? rand($minChange * 10, $maxChange * 10) / 1000 : -rand($minChange * 10, $maxChange * 10) / 1000;
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

        $kline->update([
            'close' => $closePrice,
            'high' => max($kline->open, $closePrice),
            'low' => min($kline->open, $closePrice),
            'volume' => $kline->volume + rand(0, 10),
        ]);
        $nextKline->update([
            'open' => $closePrice,
            'high' => max($nextKline->open, $closePrice),
            'low' => min($nextKline->open, $closePrice),
            'volume' => $nextKline->volume + rand(0,10)
        ]);
    }
}
