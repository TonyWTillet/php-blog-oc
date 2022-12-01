<?php

namespace App\Controller\Back;


use App\Controller\RequireAuhtentification;
use App\Queries\InscriptionsQueries;

class InscriptionsController extends BackController implements RequireAuhtentification
{
    private InscriptionsQueries $inscriptionsQueries;

    public function __construct()
    {
        $this->inscriptionsQueries = new InscriptionsQueries();
    }

    public function index()
    {
        $inscriptions = $this->inscriptionsQueries->getInscriptions();
        require $this->Twig('inscriptions', $inscriptions, 'inscriptions');
    }
}