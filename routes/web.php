<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\{AuthController, TradeController, HomeController};

Route::get('/', [HomeController::class,'index'])->name('home');

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

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::get('/register', [AuthController::class,'register'])->name('register');

Route::get('/profile', [AuthController::class,'profile'])->name('profile');

Route::post('/login', [AuthController::class,'loginPost'])->name('loginPost');

Route::post('/register', [AuthController::class,'registerPost'])->name('registerPost');

Route::middleware('auth')->group(function () {
    Route::get('trade', [TradeController::class,'index'])->name('trade');
});
