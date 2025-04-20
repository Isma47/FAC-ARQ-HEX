<?php

namespace Src\Home\Infrastructure\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home.home');
    }
}