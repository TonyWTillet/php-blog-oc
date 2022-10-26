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

        if (!isset($_SESSION['user'])) {
            die('not logged in');
            header("location:".PANEL."login/logger");
            exit();
        }
    }


    /**
     * It checks if the user is logged in.
     */
    public function isLoggin():bool
    {
        if(isset($_SESSION['user']))
        {
            return true;
        } else {
            return false;
        }
    }
}