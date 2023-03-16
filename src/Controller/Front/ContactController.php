<?php

namespace App\Controller\Front;

use App\Commands\Add\AddContactCommands;
use App\Queries\CategoryQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;
use Exception;

class ContactController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private AddContactCommands $addContactCommands;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->addContactCommands = new AddContactCommands();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $globals = $this->globalsQueries->getGlobals();
        $data['globals'] = $globals;
        if (!empty($_POST)) {
            $data['message'] = $this->addContactCommands->add($_POST);
        }
        $data['session'] = $_SESSION['user'];
        require $this->twig('contact', $data, 'data');
    }
}
