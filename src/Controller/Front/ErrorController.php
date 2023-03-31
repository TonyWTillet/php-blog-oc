<?php

namespace App\Controller\Front;

use App\Commands\Add\AddCommentCommands;
use App\Queries\CategoryQueries;
use App\Queries\CommentQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;
use Exception;

class ErrorController extends FrontController
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        require $this->twig('404', $data, 'data');
    }

}
