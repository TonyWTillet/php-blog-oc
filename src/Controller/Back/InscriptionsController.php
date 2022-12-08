<?php

namespace App\Controller\Back;


use App\Commands\Accept\UsersAcceptCommands;
use App\Commands\Delete\UsersDeleteCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\InscriptionsQueries;

class InscriptionsController extends BackController implements RequireAuhtentification
{
    private InscriptionsQueries $inscriptionsQueries;
    private UsersDeleteCommands $userCommands;
    private UsersAcceptCommands $userAcceptCommands;

    public function __construct()
    {
        $this->inscriptionsQueries = new InscriptionsQueries();
        $this->userCommands = new UsersDeleteCommands();
        $this->userAcceptCommands = new UsersAcceptCommands();
    }

    public function index()
    {
        $inscriptions = $this->inscriptionsQueries->getInscriptions();
        require $this->Twig('inscriptions', $inscriptions, 'inscriptions');
    }

    public function accept() {
        $this->userAcceptCommands->acceptUsers($_GET['id']);
    }
    public function delete() {
        $this->userCommands->deleteUser($_GET['id']);
    }
}