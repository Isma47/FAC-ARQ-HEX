<?php

use Illuminate\Support\Facades\Route;
use Src\Client\Infrastructure\Http\Controllers\CreateClientController;

Route::prefix('/')->group(function () {
    
    Route::get('create-client', [CreateClientController::class, 'index'])->name('cliente.register');

});