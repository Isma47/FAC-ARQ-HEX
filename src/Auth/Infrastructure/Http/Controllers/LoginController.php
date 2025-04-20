<?php

namespace Src\Auth\Infrastructure\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function store(){
        dd('LoginController@store');
    }
}