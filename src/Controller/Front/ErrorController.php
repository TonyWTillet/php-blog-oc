<?php

namespace App\Controller\Front;

use Exception;

class ErrorController extends FrontController
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        require $this->twig('404', $data, 'data');
    }

}
