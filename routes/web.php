<?php

use Illuminate\Support\Facades\Route;
use Roberts\WorkComp\Http\Controllers\ClassCodesController;

Route::get('/insurance/class-codes/{classCode}', [ClassCodesController::class, 'show']);
