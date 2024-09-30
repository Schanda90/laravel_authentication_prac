<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogOutController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', [SignUpController::class, 'index'])->name('signup')->middleware('web');
Route::post('signup', [SignUpController::class, 'create'])->name('signupcreate');
Route::get('login', [LoginController::class, 'index'])->middleware('web');
Route::post('login', [LoginController::class, 'log'])->name('login');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('logout', [LogOutController::class, 'logout'])->name('logout');