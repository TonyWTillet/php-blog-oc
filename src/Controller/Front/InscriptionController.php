<?php

namespace App\Controller\Front;

use App\Commands\Add\AddInscriptionsCommands;
use App\Queries\GlobalsQueries;
use Exception;

class InscriptionController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private AddInscriptionsCommands $addInscriptionsCommands;

    public function __construct()
    {
        $this->addInscriptionsCommands = new AddInscriptionsCommands();
    }

    /**
     * @throws Exception
     */
    public function index(): void
    {
        if (!empty($_POST)) {
            $data['message'] = $this->addInscriptionsCommands->add($_POST);
        }
        $data['session'] = $_SESSION['user'];
        require $this->twig('inscription', $data, 'data');
    }
}
