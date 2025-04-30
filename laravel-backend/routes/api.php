<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalanceController;

Route::prefix('balance')->group(function () {
    Route::post('/set', [BalanceController::class, 'setInitialBalance']); // Set initial balance
    Route::get('/history', [BalanceController::class, 'getIncrementHistory']); // Get history
});
