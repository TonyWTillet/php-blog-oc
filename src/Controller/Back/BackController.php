<?php

namespace App\Controller\Back;

use JetBrains\PhpStorm\NoReturn;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BackController
{




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

    public function Twig(): Environment
    {
        $loader = new FilesystemLoader(BACK_VIEW);
        $twig = new Environment($loader, [
            'cache' => false,
            'debug'=> true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        return $twig;
    }
}