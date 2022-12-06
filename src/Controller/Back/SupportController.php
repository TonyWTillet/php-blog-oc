<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;

class SupportController extends BackController implements RequireAuhtentification
{
    public function index()
    {
        require $this->Twig('support', $support, 'support');
    }
}