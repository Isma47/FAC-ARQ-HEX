<?php

namespace Src\Auth\Application\UseCases;

use Illuminate\Http\Request;
use Src\Auth\Domain\Interfaces\LoginInterface;

class LoginUserUseCase 
{

    public function __construct(private LoginInterface $loginInterface)
    {}

    public function execute(string $email, string $password): bool
    {
        return $this->loginInterface->login($email, $password);
    }
}