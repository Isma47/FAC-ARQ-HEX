<?php

use Illuminate\Support\Facades\Route;
use Src\Home\Infrastructure\Http\Controllers\HomeController;


Route::prefix('/')->group(function () {
    
    Route::get('home', [HomeController::class, 'index'])->name('client.home');

});