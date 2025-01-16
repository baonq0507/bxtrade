<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symbol;
use App\Models\Kline;
use App\Models\Interval;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class TradeController extends Controller
{
    public $increment;
    public function __construct()
    {
        $this->increment = 0;
    }
    public function time()
    {
        return response(time())
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }
    public function config()
    {
        $config = [
            "supports_search" => true,
            "supports_group_request" => false,
            "supports_marks" => false,
            "supports_timescale_marks" => false,
            "supports_time" => true,
            "exchanges" => [
                ["value" => "", "name" => "All Exchanges", "desc" => ""],
                ["value" => "BICU", "name" => "BICU Exchange", "desc" => "BICU Exchange"]
            ],
            "symbols_types" => [
                ["name" => "All types", "value" => ""],
                ["name" => "Crypto", "value" => "crypto"]
            ],
            "supported_resolutions" => ["1", "5", "15", "30", "60", "D", "2D", "3D", "W", "3W", "6M"]
        ];
        return response()->json($config)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }

    public function symbols(Request $request)
    {
        $symbol = $request->symbol;
        // if include STD remove it
        if (strpos($symbol, 'STD') !== false) {
            $symbol = str_replace('STD', '', $symbol);
        }
        $symbol = Symbol::where('symbol', $symbol)->first();
        return response()->json($symbol)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }

    public function history(Request $request)
    {

        $symbol = $request->symbol;
        $interval = $request->resolution;
        $from = $request->from;
        $to = $request->to;
        // Tìm thông tin biểu tượng và khoảng thời gian
        $interval = Interval::where('interval', $interval)->firstOrFail();
        $symbol = Symbol::where('symbol', $symbol)->firstOrFail();

        // Lấy dữ liệu từ bảng klines theo symbol và interval
        $klines = DB::table('klines')
            ->where('symbol_id', $symbol->id)
            ->where('interval_id', $interval->id)
            ->where('open_time', '>=', $from)
            ->where('open_time', '<=', $to)
            ->orderBy('open_time', 'asc')
            ->get();

        // Kiểm tra nếu không có dữ liệu
        if ($klines->isEmpty()) {
            // Tìm thời điểm tiếp theo có dữ liệu (nếu có)
            $nextKline = DB::table('klines')
                ->where('symbol_id', $symbol->id)
                ->where('interval_id', $interval->id)
                ->where('open_time', '>=', $from)
                ->where('open_time', '<=', $to)
                ->orderBy('open_time', 'asc')
                ->first();

            return response()->json([
                's' => 'no_data',
                'nextTime' => $nextKline ? $nextKline->open_time : null
            ]);
        }

        // Nếu có dữ liệu, tạo cấu trúc dữ liệu trả về
        $nextKline = $klines->last();
        $data = [
            "t" => [],
            "o" => [],
            "h" => [],
            "l" => [],
            "c" => [],
            "v" => [],
            "s" => "ok",
        ];

        foreach ($klines as $kline) {
            $data["t"][] = $kline->open_time;
            $data["o"][] = $kline->open;
            $data["h"][] = $kline->high;
            $data["l"][] = $kline->low;
            $data["c"][] = $kline->close;
            $data["v"][] = $kline->volume;
            $data['from'] = Carbon::createFromTimestamp($from)->format('Y-m-d H:i:s');
            $data['to'] = Carbon::createFromTimestamp($to)->format('Y-m-d H:i:s');
        }

        return response()->json($data)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
    }

    public function update_kline()
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

        // Xác định xu hướng hiện tại (tăng/giảm)
        $currentTrend = $kline->close > $kline->open ? 'up' : 'down';

        // Random xu hướng mới
        $newTrend = rand(0, 1) ? 'up' : 'down';

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
            'volume' => $nextKline->volume + rand(0, 10)
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kline updated successfully'
        ]);
    }
}
