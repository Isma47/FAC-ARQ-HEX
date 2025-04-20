<?php

use Illuminate\Support\Facades\Route;
use Src\Auth\Infrastructure\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store']);


Route::prefix('/')->group(function () {
    
    Route::get('home', [])->name('client.home');

});