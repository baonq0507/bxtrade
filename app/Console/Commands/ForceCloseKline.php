<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kline;
class ForceCloseKline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'forceclose';

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
        $now = time();
        $kline = Kline::where('interval_id', 1)
        ->where('open_time', '<=', $now)
            ->orderBy('open_time', 'desc')
            ->with('symbol')
            ->first();
        // check dif close and open
        $diff = $kline->close - $kline->open;
        if ($diff <= 1) {
            if($kline->force_close){
                $kline->close = $kline->force_close;
                $kline->save();
            }
        }
    }
}
