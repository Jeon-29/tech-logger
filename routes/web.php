<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/devices/create', function () {
    return view('devices.create');
});

Route::post('/devices', [App\Http\Controllers\ClientController::class, 'store']);