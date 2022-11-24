<?php

namespace App\Controller\Back;


use App\Queries\GlobalsQueries;

class GlobalsController extends BackController
{
    private GlobalsQueries $globalsQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
    }

    public function index()
    {
        $this->login();

        $globals  = $this->globalsQueries->getGlobals();


        echo $this->Twig()->render('globals.twig', [
            'error' => $error,
            'globals' => $globals
        ]);
    }
}