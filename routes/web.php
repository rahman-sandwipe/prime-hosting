<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ServerController;
use App\Http\Controllers\User\FeatureController;
use App\Http\Controllers\User\ServiceController;

/**Authenticate Routes */
use App\Http\Controllers\User\SettingsController;
use App\Http\Controllers\User\AttributeController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\User\SupportTicketController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\User\HostingPackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/* | ---------- |Web Routes| ---------- | */
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [ResetPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'store'])->name('password.update');
});


/* | ---------- |User Home Section| ---------- | */
Route::controller(HomeController::class)->group(function () {
    Route::get('/',                 'homePage')->name('homePage');
    Route::get('/about-section',    'aboutSection');
    Route::get('/hero-section',     'heroSection');
    Route::get('/support-section',  'supportSection');
});

/* | ---------- |User Support Section| ---------- | */
Route::controller(SupportTicketController::class)->group(function () {
    Route::get('/support-ticket', 'supportTicketPage')->name('support.page');
    Route::post('/support-ticket', 'store')->name('support.store');
});

/* | ---------- |Feature Section| ---------- | */
Route::controller(FeatureController::class)->group(function () {
    Route::get('/feature-list',                   'featureList')->name('featureList');
});

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

/* | ---------- |Settings Routes| ---------- | */
Route::controller(SettingsController::class)->group(function () {
    Route::get('/contact-infos',            'contactInfosPage')->name('contactInfosPage');
    Route::get('/mail-configs',             'mailConfigsPage')->name('mailConfigsPage');
    Route::get('/seo-settings',             'seoSettingsPage')->name('seoSettingsPage');
    Route::get('/site-settings',            'settingsPage')->name('settingsPage');
    Route::get('/social-links',             'socialLinksPage')->name('socialLinksPage');
    Route::get('/payment-gateways',         'peymentGetewaysPage')->name('peymentGetewaysPage');
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';
