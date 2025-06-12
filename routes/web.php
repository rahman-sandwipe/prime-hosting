<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\CloudHostingController;
use App\Http\Controllers\DomainPricingController;
use App\Http\Controllers\SharedHostingController;
use App\Http\Controllers\RegisterDomainController;
use App\Http\Controllers\ResellerDomainController;
use App\Http\Controllers\TransferDomainController;

/**Authenticate Routes */
use App\Http\Controllers\ResellerHostingController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');














Route::get('/contact-us', [ContactController::class, 'contactPage'])->name('contactPage');
Route::post('/contact-us', [ContactController::class, 'submitFrom']);

Route::get('/blogs', [BlogController::class, 'blogPage'])->name('blogPage');

Route::get('register-domain', [RegisterDomainController::class, 'registerDomainPage'])->name('registerDomainPage');
Route::get('transfer-domain', [TransferDomainController::class, 'transferDomainPage'])->name('transferDomainPage');
Route::get('reseller-domain', [ResellerDomainController::class, 'resellerDomainPage'])->name('resellerDomainPage');
Route::get('domain-pricing', [DomainPricingController::class, 'domainPricingPage'])->name('domainPricingPage');

Route::get('cloud-hosting', [CloudHostingController::class, 'cloudHostingPage'])->name('cloudHostingPage');
Route::get('shared-hosting', [SharedHostingController::class, 'sharedHostingPage'])->name('sharedHostingPage');
Route::get('reseller-hosting', [ResellerHostingController::class, 'resellerHostingPage'])->name('resellerHostingPage');

require __DIR__.'/auth.php';
require __DIR__.'/api.php';
