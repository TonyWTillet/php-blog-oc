<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;

class SupportController extends BackController implements RequireAuhtentification
{
    public function index()
    {
        require $this->twig('support', $support, 'support');
    }
}