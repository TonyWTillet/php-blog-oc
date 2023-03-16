<?php

namespace App\Service;

use App\Controller\RequireAuhtentificationInterface;
use JetBrains\PhpStorm\NoReturn;

class AuthentificationService
{
    /**
     * > If the controller is an instance of the RequireAuthentification interface, then return true
     *
     * @param controller The controller that is being called.
     *
     * @return bool A boolean value.
     */
    public function verifyAuthentification($controller): bool
    {
        return $controller instanceof RequireAuhtentificationInterface;
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
