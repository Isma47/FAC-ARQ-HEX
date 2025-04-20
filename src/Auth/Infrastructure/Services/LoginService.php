<?php

namespace Src\Auth\Infrastructure\Services;

use Illuminate\Support\Facades\Auth;
use Src\Auth\Domain\Interfaces\LoginInterface;

class LoginService implements LoginInterface
{ 

    public function login(string $email, string $password): bool
    {
        return Auth::attempt(['email' => $email,'password' => $password,]);
    }

}
