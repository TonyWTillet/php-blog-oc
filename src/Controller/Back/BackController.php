<?php

namespace App\Controller\Back;

use App\Middleware\Database;
use Exception;
use PDOException;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class BackController
{

    public function __construct()
    {
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

    /**
     * > This function creates a new Twig environment, sets the cache to false, and sets the debug to true
     *
     * @return string A new instance of the Twig Environment class.
     */
    public function twig(string $template, ?array  $array, string $name): void
    {
        $loader = new FilesystemLoader(BACK_VIEW);
        $twig = new Environment($loader, [
            'cache' => false,
            'debug'=> true
        ]);
        $twig->addGlobal('session', $_SESSION);
        $twig->addExtension(new DebugExtension());
        echo $twig->render($template.'.twig', [
            $name => $array,
        ]);
    }
}
