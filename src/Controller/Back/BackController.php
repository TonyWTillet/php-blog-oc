<?php

namespace App\Controller\Back;

use JetBrains\PhpStorm\NoReturn;
use Twig\Environment;
use Twig\Extension\DebugExtension;
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

    /**
     * > This function creates a new Twig environment, sets the cache to false, and sets the debug to true
     *
     * @return string A new instance of the Twig Environment class.
     */
    public function Twig(string $template,  $array, $name): string
    {
        $loader = new FilesystemLoader(BACK_VIEW);
        $twig = new Environment($loader, [
            'cache' => false,
            'debug'=> true
        ]);
        $twig->addExtension(new DebugExtension());

        echo $twig->render($template.'.twig', [
            $name => $array,
        ]);
    }
}