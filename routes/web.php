<?php

use App\Http\Controllers\Admin\Settings\BusinessController;
use App\Http\Controllers\Admin\Dashboard\HomeController;
use App\Http\Controllers\Admin\Settings\InvoiceController;
use App\Http\Controllers\Install\InstallController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'install', 'as' => 'install.', 'middleware' => 'isInstalled'], function () {
    Route::get('/start-install', [InstallController::class, 'checkSystemRequirements'])->name('start-install');
    Route::get('/options', [InstallController::class, 'selectInstallOptions'])->name('options');
    Route::post('/silent-install', [InstallController::class, 'silentInstall'])->name('silent-install');
    Route::get('/custom-install', [InstallController::class, 'customInstall'])->name('custom-install');
    Route::post('/save-instal-data', [InstallController::class, 'saveInstallData'])->name('save-instal-data');
});

Route::get('/install/success', [InstallController::class, 'installSuccess'])->name('install.success');

Route::middleware(['shouldInstall', 'auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['shouldInstall'])->group(function () {
    Route::get('settings/business', [BusinessController::class, 'getBusinessSetting'])->name('settings.business');
    Route::get('settings/invoice', [InvoiceController::class, 'getInvoiceSetting'])->name('settings.invoice');
});

require __DIR__ . '/auth.php';
