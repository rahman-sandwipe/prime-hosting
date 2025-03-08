<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CloudHostingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainPricingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterDomainController;
use App\Http\Controllers\ResellerDomainController;
use App\Http\Controllers\ResellerHostingController;
use App\Http\Controllers\SharedHostingController;
use App\Http\Controllers\TransferDomainController;
use Illuminate\Support\Facades\Route;


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
