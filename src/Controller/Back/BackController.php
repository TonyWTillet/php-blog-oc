<?php

namespace App\Controller\Back;

use App\Entity\Comment;
use Exception;
use JetBrains\PhpStorm\NoReturn;
use PDOException;
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
    public function Twig(string $template,  $array, $name)
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

    /**
     * @throws Exception
     */
    public function Counter() {
        try {
            $req = $this->getPDO()->prepare("SELECT COUNT(*) FROM $this->table");
            $counter = $req->execute();
            if (!$counter) {
                return '0';
            }
            return $counter;

        } catch(PDOException $e) {
            throw new \Exception('Error while, counting  '. $e->getMessage());
        }
    }

}