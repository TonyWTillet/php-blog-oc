<?php

namespace App\Controller\Back;

use JetBrains\PhpStorm\NoReturn;

class BackController
{

    /**
     * It redirects the user to the login page if the user is not logged in.
     */
    #[NoReturn] public function login(): void
    {
        if(isset($_SESSION['users']))
        {
            header("Location:".PANEL."login");
        } else {
            header("Location:".PANEL."index");
        }
        exit();

    }

    /**
     * It checks if the user is logged in.
     */
    public function isLoggin():bool
    {
        if(isset($_SESSION['users']))
        {
            return true;
        }
        return false;
    }
}