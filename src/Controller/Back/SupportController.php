<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentificationInterface;

class SupportController extends BackController implements RequireAuhtentificationInterface
{
    public function index(): void
    {
        require $this->twig('support', $support, 'support');
    }
}
