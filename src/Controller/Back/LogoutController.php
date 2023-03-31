<?php

namespace App\Controller\Back;

use App\Service\Logout;

class LogoutController
{
    private Logout $logout;

    public function index(): void
    {
       $this->logout = new Logout();
    }
}
