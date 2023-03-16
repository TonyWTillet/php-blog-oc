<?php

namespace App\Controller\Front;


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class FrontController
{
    /**
     * > This function creates a new Twig environment, sets the cache to false, and sets the debug to true
     *
     * @return string A new instance of the Twig Environment class.
     */
    public function twig(string $template,  $array, $name): void
    {
        $loader = new FilesystemLoader(FRONT_VIEW);
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