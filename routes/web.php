<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PustakawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage.index');

#frontPage
Route::get('/', [LandingpageController::class, 'index'])->name('landingpage.index');
Route::get('berita/beritafront', [LandingpageController::class, 'berita'])->name('landingpage.berita');
Route::get('pustakawan/frontpage', [LandingpageController::class, 'pustakawan'])->name('landingpage.pustakawan');
Route::get('/bacaberita/{berita:slug}', [LandingpageController::class, 'show'])->name('landingpage.berita.show');

Route::get('/landingpage/bacaberita', function () {
    return view('landingpage.bacaberita');
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

    #kategori
    Route::resource('kategori', KategoriController::class);

    #berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/datatables', [BeritaController::class, 'datatables'])->name('berita.datatables');

    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    #Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.passwordupdate');

    #pustakawan
    Route::get('/pustakawans', [PustakawanController::class, 'index'])->name('pustakawan.index');
    Route::get('/pustakawan/create', [PustakawanController::class, 'create'])->name('pustakawan.create');
    Route::post('/pustakawans', [PustakawanController::class, 'store'])->name('pustakawan.store');
    Route::get('/pustakawans/{id}/edit', [PustakawanController::class, 'edit'])->name('pustakawan.edit');
    Route::put('/pustakawans/{id}', [PustakawanController::class, 'update'])->name('pustakawan.update');
    Route::delete('/pustakawans/{id}', [PustakawanController::class, 'destroy'])->name('pustakawan.destroy');

    #dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
