<?php

namespace App\Controller\Front;

use App\Queries\CategoryQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use Exception;

class IndexController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private CategoryQueries $categoryQueries;
    private PostQueries $postQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->categoryQueries = new CategoryQueries();
        $this->postQueries = new PostQueries();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $categories = $this->categoryQueries->getCategories();
        $globals = $this->globalsQueries->getGlobals();
        $posts = $this->postQueries->getPosts();
        $data['categories'] = $categories;
        $data['globals'] = $globals;
        $data['posts'] = $posts;
        require $this->Twig('home', $data, 'data');
    }
}