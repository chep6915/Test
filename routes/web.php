<?php

use Chep6915\ISocial\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

//Route::get('test-route',function () {
//    return ISocial::response();
//});

Route::get('test-route', [HelloController::class, 'index']);
Route::get('test-view', [HelloController::class, 'view']);