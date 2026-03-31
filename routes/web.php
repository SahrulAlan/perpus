<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
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

    #frontPage
    // Route::get('/', [FrontpageController::class, 'index'])->name('frontpage.index');
    // Route::get('berita/beritafront', [FrontpageController::class, 'berita'])->name('frontpage.berita');
    // Route::get('pengurus/pengurusbempes', [FrontpageController::class, 'pengurus'])->name('pengurus.show');
    // Route::get('/berita/{berita:slug}', [FrontpageController::class, 'show'])->name('berita.show');
});
