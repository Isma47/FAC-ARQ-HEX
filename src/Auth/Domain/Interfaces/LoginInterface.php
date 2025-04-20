<?php

namespace Src\Auth\Domain\Interfaces;

Interface LoginInterface
{
    public function login(string $email, string $password): bool;
}