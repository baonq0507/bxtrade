<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Artisan;
Route::get('/', function () {
    return view('home');
});
Route::get('trade', function () {
    return view('trade');
});
Route::get('trade-test', function () {
    return view('trade_test');
});
Route::get('/time', [TradeController::class,'time']);

//config
Route::get('/config', [TradeController::class,'config']);

Route::get('/symbols', [TradeController::class,'symbols']);

Route::get('/history', [TradeController::class,'history']);

Route::get('/symbol_info', function (Request $request) {
    $symbol = $request->group;
    return response()->json([
        [
            "symbol" => $symbol,
            "full_name" => $symbol,
            "description" => $symbol,
            "exchange" => "NYSE",
            "type" => "stock"
        ]
    ]);
});

//update Kline
Route::get('/update_kline', function () {
    Artisan::call('app:delete-klines');
    return 'Klines deleted successfully';
});

//delete all klines
Route::get('/delete_klines', function () {
    Artisan::call('delete-klines');
    return 'Klines deleted successfully';
});

