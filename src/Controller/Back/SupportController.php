<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentificationInterface;

class SupportController extends BackController implements RequireAuhtentificationInterface
{
    public function index()
    {
        require $this->twig('support', $support, 'support');
    }
}
