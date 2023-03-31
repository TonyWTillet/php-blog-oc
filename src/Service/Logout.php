<?php

namespace App\Service;

use JetBrains\PhpStorm\NoReturn;

class Logout
{
    #[NoReturn] public function __construct()
    {
        session_destroy();
        $redirect = new Redirect();
        $redirect->redirectHome();
    }
}
