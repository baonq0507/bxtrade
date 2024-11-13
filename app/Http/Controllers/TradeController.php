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
            "timezone" => "Asia/Ho_Chi_Minh",
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
}
