<?php

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
    Route::get('/', function () {
    })->name('home');
});

require __DIR__ . '/auth.php';
