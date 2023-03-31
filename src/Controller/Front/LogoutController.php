<?php

namespace App\Controller\Front;

use App\Service\Logout;

class LogoutController
{
    private Logout $logout;

    public function index(): void
    {
        $this->logout = new Logout();
    }
}
