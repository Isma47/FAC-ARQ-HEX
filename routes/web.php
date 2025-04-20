<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require base_path('src/Auth/Infrastructure/Http/Routes/web.php');

