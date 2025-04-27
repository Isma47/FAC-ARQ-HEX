<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require base_path('src/Auth/Infrastructure/Http/Routes/web.php');
require base_path('src/Home/Infrastructure/Http/Routes/web.php');
require base_path('src/Client/Infrastructure/Http/Routes/web.php');
