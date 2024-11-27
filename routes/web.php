<?php

use App\Http\Middleware\ManagerOnly;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengumpulanController;
use App\Http\Controllers\ListTugasController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengumpulan;

Route::get('/', function () {
    return view('home')->with('pengumpulans', Pengumpulan::get());
});

Route::resource('users', UserController::class);

Route::middleware('auth')->group(function () {
    Route::resource('pengumpulan', PengumpulanController::class);
});

Route::resource('list_tugas', ListTugasController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



