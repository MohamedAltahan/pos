<?php

use App\Http\Controllers\Install\InstallController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'install', 'as' => 'install.'], function () {
    Route::get('/', [InstallController::class, 'checkSystemRequirements']);
    Route::get('/options', [InstallController::class, 'selectInstallOptions'])->name('options');
    Route::get('/silent-install', [InstallController::class, 'silentInstall'])->name('silent-install');
    Route::get('/custom-install', [InstallController::class, 'customInstall'])->name('custom-install');
    Route::post('/save-instal-data', [InstallController::class, 'saveInstallData'])->name('save-instal-data');
});
