<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

// for people who are not logged in
Route::middleware(['guest'])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// for people who are logged in
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
Route::get('/devices/create', [App\Http\Controllers\ClientController::class, 'create']);

Route::post('/device', [ClientController::class, 'store']);