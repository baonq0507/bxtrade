<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TradeController;
Route::get('/', function () {
    return view('welcome');
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

//real time data
