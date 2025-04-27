<?php

namespace Src\Client\Infrastructure\Http\Controllers;
use App\Http\Controllers\Controller;

class CreateClientController
{
    public function index()
    {
        return view('client.clients.createCliente');
    }
}