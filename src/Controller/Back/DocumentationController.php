<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentificationInterface;

class DocumentationController extends BackController implements RequireAuhtentificationInterface
{
    public function index()
    {
        require $this->twig('documentation', $documentation, 'documentation');
    }
}

