<?php

namespace App\Service;

use JetBrains\PhpStorm\NoReturn;

class Redirect
{
    #[NoReturn] public function redirect(string $page): void
    {
        header('Location: ' . HTTP .'panel/'. $page);
    }

    #[NoReturn] public function redirectHome(): void
    {
        header('Location: ' . HTTP);
    }
}
