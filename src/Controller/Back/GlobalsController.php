<?php

namespace App\Controller\Back;


use App\Controller\RequireAuhtentification;
use App\Queries\GlobalsQueries;

class GlobalsController extends BackController implements RequireAuhtentification
{
    private GlobalsQueries $globalsQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
    }

    public function index()
    {

        $globals  = $this->globalsQueries->getGlobals();


        echo $this->Twig()->render('globals.twig', [
            'globals' => $globals
        ]);
    }
}