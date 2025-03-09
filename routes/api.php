<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HostingPlanController;



Route::prefix('admin')->middleware('auth')->group(function () {
    // Route::get('/hosting-plane-list',       [HostingPlanController::class, 'HostingPlaneList'])->name('HostingPlaneList');
    
    Route::post('/hosting-plane-store',        [HostingPlanController::class, 'HostingPlaneStore'])->name('HostingPlaneStore');
});
