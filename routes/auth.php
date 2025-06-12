<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HostingPackageController;
use App\Http\Controllers\Admin\SupportTicketController;

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard',        [DashboardController::class,'DashboardPage'])->name('dashboardPage');
    Route::get('/users',            [UserController::class,'UsersPage'])->name('usersPage');
    Route::get('/attributes',       [AttributeController::class,'AttributesPage'])->name('attributesPage');
    Route::get('/hosting-packages', [HostingPackageController::class,'HostingPage'])->name('hostingPage');
    Route::get('/orders',           [OrderController::class, 'OrdersPage'])->name('ordersPage');
    Route::get('/peyments',         [PaymentController::class, 'PaymentsPage'])->name('paymentsPage');
    Route::get('/support-tracker',  [SupportTicketController::class, 'SupportTrackerPage'])->name('supportTrackerPage');
    Route::get('/logout',           [DashboardController::class, 'destroy'])->name('logout');
});
// Route::get('/dashboard', [DashboardController::class,'DashboardPage'])->name('dashboard');