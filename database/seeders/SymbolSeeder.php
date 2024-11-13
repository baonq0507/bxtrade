<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symbol;
class SymbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $symbols = [
            'BTCUSDT',
            'ETHUSDT',
            'SOLUSDT',
            'XRPUSDT',
            'ADAUSDT',
            'DOGEUSDT',
            'DOTUSDT',
            'BNBUSDT',
            'AVAXUSDT',
            'LTCUSDT',
            'LINKUSDT',
        ];
        foreach ($symbols as $symbol) {
            Symbol::create([
                'symbol' => $symbol,
                'name' => $symbol,
                'status' => 1,
                'supported_resolutions' => json_encode(['1', '5', '15', '30', '60', 'D', '2D', '3D', 'M', 'W', '3W', '6M']),
                'has_no_volume' => false,
                'has_intraday' => true,
                'has_daily' => true,
                'has_weekly_and_monthly' => true,
                'pricescale' => 100,
                'minmov' => 1,
                'ticker' => $symbol,
                'full_name' => $symbol,
                'description' => 'BICU ' . $symbol,
                'timezone' => 'Asia/Ho_Chi_Minh',
                'session' => '24x7',
                'min_price' => 60000,
                'max_price' => 100000,
                'min_change' => 1,
                'max_change' => 7,
            ]);
        }
    }
}
