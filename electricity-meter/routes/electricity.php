<?php

use App\Http\Controllers\ElectricityMeterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [ElectricityMeterController::class, 'index'])->name('electricity-meters');

    Route::get('/add', [ElectricityMeterController::class, 'create'])->name('electricity-create');
    Route::post('/', [ElectricityMeterController::class, 'store'])->name('electricity-meter-store');
    Route::get('/{electricity}/', [ElectricityMeterController::class, 'show'])->name('electricity-meter-view');
});
