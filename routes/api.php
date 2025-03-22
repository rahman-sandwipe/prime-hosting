<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HostingPlanController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('/hosting-plane-store',        [HostingPlanController::class, 'HostingPlaneStore'])->name('HostingPlaneStore');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/get-attributes',                   [AttributeController::class,    'getAttributes'])->name('getAttributes');
    Route::post('/insert-attribute',                [AttributeController::class,    'storeAttribute'])->name('storeAttribute');
    Route::post('/modify-attribute/{attributeID}',  [AttributeController::class,    'modifyAttribute'])->name('modifyAttribute');
    Route::post('/update-attribute/{attributeID}',  [AttributeController::class,    'updateAttribute'])->name('updateAttribute');
    Route::delete('/delete-attribute/{attributeID}',[AttributeController::class,    'deleteAttribute'])->name('deleteAttribute');
});
