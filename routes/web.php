<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');;
// Route::resource('anggota', AnggotaController::class)->middleware('auth');;
// Route::resource('kategori', KategoriController::class)->middleware('auth');;

Route::middleware(['auth', 'verified'])->group(function () {
    //dapat diakses oleh IsSuperAdmin dan IsAdmin
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('kategori', KategoriController::class);

    Route::middleware([IsSuperAdmin::class])->group(function () {
        //sidebar yang diakses IsSuperAdmin
        Route::resource('user', UserController::class);
        Route::resource('anggota', AnggotaController::class);
    });

    Route::middleware([IsAdmin::class])->group(function () {
        //sidebar yang diakses IsAdmin

    });
});
