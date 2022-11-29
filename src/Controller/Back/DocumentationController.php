<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;

class DocumentationController extends BackController implements RequireAuhtentification
{
    public function index()
    {
        require $this->Twig('documentation', $documentation, 'documentation');
    }
}
