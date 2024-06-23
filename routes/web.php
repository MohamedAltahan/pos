<?php

use App\Http\Controllers\Install\InstallController;
use Illuminate\Support\Facades\Route;



Route::get('/', [InstallController::class, 'index']);
