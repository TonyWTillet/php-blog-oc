<?php

namespace App\Service;

use App\Controller\RequireAuhtentification;
use JetBrains\PhpStorm\NoReturn;

class AuthentificationService
{
    public function verifyAuthentification($controller): bool
    {
        return $controller instanceof RequireAuhtentification;
    }

    /**
     * It redirects the user to the login page if the user is not logged in.
     */
    #[NoReturn] public function login(): void
    {

        if (!isset($_SESSION['user'])) {
            header("location:".PANEL."login/logger");
            exit();
        }
    }
}