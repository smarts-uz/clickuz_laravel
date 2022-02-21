<?php

use Illuminate\Support\Facades\Route;
use Teamprodev\Clickuz_Laravel\Http\Controllers\ClickuzController;


Route::get('/click_uz_test', [ClickuzController::class, 'index']);

Route::get('/click_pay', [ClickuzController::class, 'pay']);

Route::post('/clprepare', [ClickuzController::class, 'prepare']);

Route::post('/clcomplete', [ClickuzController::class, 'complete']);
