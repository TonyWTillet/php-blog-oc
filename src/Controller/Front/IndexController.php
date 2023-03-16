<?php

namespace App\Controller\Front;

use App\Queries\CategoryQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;
use Exception;

class IndexController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private CategoryQueries $categoryQueries;
    private PostQueries $postQueries;
    private UserQueries $userQueries;
    private DateFormat $dateFormat;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->categoryQueries = new CategoryQueries();
        $this->postQueries = new PostQueries();
        $this->userQueries = new UserQueries();
        $this->dateFormat = new DateFormat();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $categories = $this->categoryQueries->getCategories();
        $globals = $this->globalsQueries->getGlobals();
        $posts = $this->postQueries->getRecentPost();
        $users = $this->userQueries->getActiveUsers();
        $data['categories'] = $categories;
        $data['globals'] = $globals;
        $data['posts'] = $posts;
        $data['users'] = $users;
        $data['session'] = $_SESSION['user'];
        require $this->twig('home', $data, 'data');
    }
}
