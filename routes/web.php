<?php

use App\Http\Controllers\User\HostingPackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

/**Authenticate Routes */
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\AttributeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
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


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
