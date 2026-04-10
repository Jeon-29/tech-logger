<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/devices/create', [App\Http\Controllers\ClientController::class, 'create']);

Route::post('/device', [ClientController::class, 'store']);