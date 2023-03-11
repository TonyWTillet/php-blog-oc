<?php

namespace App\Trait;

class Logout
{
    public function __invoke(): void
    {
        session_destroy();
        header('Location: '.HTTP.'panel/login');
    }
}