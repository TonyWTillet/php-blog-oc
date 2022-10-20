<?php

namespace App\Controller\Back;

use JetBrains\PhpStorm\NoReturn;

class BackController
{

    #[NoReturn] public function login()
    {
        if(isset($_SESSION['users']))
        {
            header("Location:".PANEL."login");
            exit();
            return true;
        } else {
            header("Location:".PANEL."index");
            exit();
            return false;
        }

    }
}