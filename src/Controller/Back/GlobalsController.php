<?php

namespace App\Controller\Back;


use App\Commands\Edit\GlobalsEditCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\GlobalsQueries;

class GlobalsController extends BackController implements RequireAuhtentification
{
    private GlobalsQueries $globalsQueries;
    private GlobalsEditCommands $globalsCommands;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->globalsCommands = new GlobalsEditCommands();
    }

    public function index()
    {

        $globals  = $this->globalsQueries->getGlobals();
        if ($_POST) {
            $modif = $this->globalsCommands->save($_POST['name']);
        }
        require $this->twig('globals', $globals, 'globals');
    }
}