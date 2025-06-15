<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\HostingPackageController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user-list',                        'userList')->name('userList');
        Route::post('/user-insert',                     'userInsert')->name('userInsert');
        Route::get('/user-details/{user}',              'userDetails')->name('userDetails');
        Route::get('/user-modify/{user}',               'userModify')->name('userModify');
        Route::post('/user-update/{user}',              'userUpdate')->name('userUpdate');
        Route::get('/user-delete/{user}',               'userDelete')->name('userDelete');
    });

    // Feature routes
    Route::controller(FeatureController::class)->group(function () {
        Route::get('/feature-list',                     'featureList')->name('featureList');
        Route::post('/feature-insert',                  'featureInsert')->name('featureInsert');
        Route::get('/feature-details/{feature}',        'featureDetails')->name('featureDetails');
        Route::get('/feature-modify/{feature}',         'featureModify')->name('featureModify');
        Route::post('/feature-update/{feature}',        'featureUpdate')->name('featureUpdate');
        Route::delete('/feature-delete/{feature}',      'featureDelete')->name('featureDelete');
    });

    Route::controller(HostingPackageController::class)->group(function () {
        Route::get('/package-list',                         'packageList');
        Route::post('/package-insert',                      'packageInsert');
        Route::get('/package-details/{hostingPackage}',     'packageDetails');
        Route::get('/package-modify/{hostingPackage}',      'packageModify');
        Route::post('/package-update/{hostingPackage}',     'packageUpdate');
        Route::get('/package-delete/{hostingPackage}',      'packageDelete');
    });
    
    Route::controller(AttributeController::class)->group(function () {
        Route::get('/attribute-list',                   'attributeList')->name('attributeList');
        Route::post('/attribute-insert',                'attributeInsert')->name('attributeInsert');
        Route::get('/attribute-details/{attribute}',    'attributeDetails')->name('attributeDetails');
        Route::get('/attribute-modify/{attribute}',     'attributeModify')->name('attributeModify');
        Route::post('/attribute-update/{attribute}',    'attributeUpdate')->name('attributeUpdate');
        Route::get('/attribute-delete/{attribute}',     'attributeDelete')->name('attributeDelete');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/service-list',                     'serviceList')->name('serviceList');
        Route::post('/service-insert',                  'serviceInsert')->name('serviceInsert');
        Route::get('/service-details/{service}',        'serviceDetails')->name('serviceDetails');
        Route::get('/service-modify/{service}',         'serviceModify')->name('serviceModify');
        Route::post('/service-update/{service}',        'serviceUpdate')->name('serviceUpdate');
        Route::delete('/service-delete/{service}',         'serviceDelete')->name('serviceDelete');
    });

    Route::controller(ServerController::class)->group(function () {
        Route::get('/server-list',                      'serverList')->name('serverList');
        Route::post('/server-insert',                   'serverInsert')->name('serverInsert');
        Route::get('/server-details/{server}',          'serverDetails')->name('serverDetails');
        Route::get('/server-modify/{server}',           'serverModify')->name('serverModify');
        Route::post('/server-update/{server}',          'serverUpdate')->name('serverUpdate');
        Route::delete('/server-delete/{server}',        'serverDelete')->name('serverDelete');
    });
});
