<?php

use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;

Route::post('/activate', [LicenseController::class, 'verify'])->name('licence.verify');
