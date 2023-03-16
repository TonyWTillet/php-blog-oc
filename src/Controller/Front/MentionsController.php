<?php

namespace App\Controller\Front;

use App\Queries\CategoryQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;
use Exception;

class MentionsController extends FrontController
{
    private GlobalsQueries $globalsQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $globals = $this->globalsQueries->getGlobals();
        $data['globals'] = $globals;
        $data['session'] = $_SESSION['user'];
        require $this->Twig('mentions', $data, 'data');
    }
}