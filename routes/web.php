<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});


#Login
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['CekLogin'])->group(function () {

    #Dashboard
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
});
