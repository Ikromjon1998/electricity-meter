<?php

use App\Http\Controllers\ElectricityMeterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [ElectricityMeterController::class, 'index'])->name('electricity-meters');
    Route::post('/', [ElectricityMeterController::class, 'store'])->name('electricity-store');
    Route::patch('/{electricityMeter}', [ElectricityMeterController::class, 'update'])->name('electricity-update');

    Route::get('/add', [ElectricityMeterController::class, 'create'])->name('electricity-create');
    Route::get('/edit/{electricityMeter}', [ElectricityMeterController::class, 'edit'])->name('electricity-edit');

    Route::get('/view/{electricityMeter}', [ElectricityMeterController::class, 'show'])->name('electricity-view');
    Route::delete('/{electricityMeter}', [ElectricityMeterController::class, 'destroy'])->name('electricity-delete');
});
