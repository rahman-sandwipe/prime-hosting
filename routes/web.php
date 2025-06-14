<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ServerController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\AttributeController;

/**Authenticate Routes */
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\User\HostingPackageController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/* | ---------- |Web Routes| ---------- | */
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::get('/',                 [HomeController::class, 'homePage'])->name('homePage');


// AttributeController
Route::controller(AttributeController::class)->group(function () {
    Route::get('/attribute-list',                   'attributeList')->name('attributeList');
    Route::get('/attribute-details/{attribute}',    'attributeDetails')->name('attributeDetails');
    Route::get('/get-package/{attribute}',          'getPackage')->name('getPackage');
});

Route::controller(HostingPackageController::class)->group(function () {
    Route::get('/hosting-package/{attribute:attribute_slug}', 'hostingPackage')->name('hostingPage');
});

/* | ---------- |Server Section| ---------- | */
Route::controller(ServerController::class)->group(function () {
    Route::get('/server-list',                      'serverList')->name('serverList');
    Route::get('/server-details/{server}',          'serverDetails')->name('serverDetails');
});

/* | ---------- |Service Section| ---------- | */
Route::controller(ServiceController::class)->group(function () {
    Route::get('/service-list',                     'serviceList')->name('serviceList');
    Route::get('/service-details/{service}',        'serviceDetails')->name('serviceDetails');
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';
