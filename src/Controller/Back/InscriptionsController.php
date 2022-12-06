<?php

namespace App\Controller\Back;


use App\Commands\Delete\UsersDeleteCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\InscriptionsQueries;

class InscriptionsController extends BackController implements RequireAuhtentification
{
    private InscriptionsQueries $inscriptionsQueries;
    private UsersDeleteCommands $userCommands;

    public function __construct()
    {
        $this->inscriptionsQueries = new InscriptionsQueries();
        $this->userCommands = new UsersDeleteCommands();
    }

    public function index()
    {
        $inscriptions = $this->inscriptionsQueries->getInscriptions();
        require $this->Twig('inscriptions', $inscriptions, 'inscriptions');
    }


    public function delete() {
        $this->userCommands->deleteUser($_GET['id']);
    }
}