<?php

namespace App\Trait;

use JetBrains\PhpStorm\NoReturn;

class Redirect
{
    #[NoReturn] public function redirect(string $page): void
    {
        header('Location: ' . HTTP .'panel/'. $page);
        exit();
    }
}