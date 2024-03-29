<?php

namespace App\Controller\Back;


use App\Commands\Accept\UsersAcceptCommands;
use App\Commands\Delete\UsersDeleteCommands;
use App\Controller\RequireAuhtentificationInterface;
use App\Queries\InscriptionsQueries;

class InscriptionsController extends BackController implements RequireAuhtentificationInterface
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

    public function index(): void
    {
        $inscriptions = $this->inscriptionsQueries->getInscriptions();
        require $this->twig('inscriptions', $inscriptions, 'inscriptions');
    }

    public function accept(): void {
        $this->userAcceptCommands->acceptUsers($_GET['id']);
    }
    public function delete(): void {
        $this->userCommands->deleteUser($_GET['id']);
    }
}
