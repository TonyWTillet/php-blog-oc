<?php

namespace App\Controller\Front;

use App\Queries\GlobalsQueries;
use Exception;

class PolitiqueController extends FrontController
{
    private GlobalsQueries $globalsQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
    }

    /**
     * @throws Exception
     */
    public function index(): void
    {
        $globals = $this->globalsQueries->getGlobals();
        $data['globals'] = $globals;
        $data['session'] = $_SESSION['user'];
        require $this->twig('politique', $data, 'data');
    }
}
